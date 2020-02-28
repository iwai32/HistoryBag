<?php

namespace App\Http\Controllers\Contents;

use Auth;
use App\Models\DailyReport;
use App\Models\CategoryOfContents;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\DailyReportRequest;
use App\Http\Controllers\Controller;

class DailyReportController extends Controller
{
    private $dailyReports;
    public $categories;
    public $categoryOfContents;

    public function __construct(DailyReport $dailyReport, CategoryOfContents $categoryOfContent, Category $category)
    {
      $this->dailyReports = $dailyReport;
      $this->categoryOfContents = $categoryOfContent;
      $this->categories = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contents.dailyReport.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contents.dailyReport.create');
    }

    public function confirm(DailyReportRequest $request)
    {
        $inputs = $request->all();
        $file = $request->file('photo');
        $tmpName = "";

        if (isset($file)) {
          $tmpName = uniqid("THUM_") . "." . $file->guessExtension();//TMPファイル名
          $file->move(public_path() . "/images/tmp", $tmpName);//ファイルの一時保存
        }

        return view('contents.dailyReport.confirm', compact('inputs', 'tmpName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\DailyReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DailyReportRequest $request)
    {
      $inputs = $request->all();
      $inputs['user_id'] = Auth::id();

      //ファイルをアップロードした場合
      if (isset($inputs['thumbnail_img'])) {
        //ディレクトリを作成
        if (!file_exists(public_path(). "/images/". Auth::id())) {
          mkdir(public_path(). "/images/". Auth::id(), 0777);
        };

        //一時保存から本番の格納場所へ移動
        // リネーム/images/tmp/tmp_name を /images/Auth::id()/thumbnail_imgへ
        rename(public_path() . "/images/tmp/". $inputs['tmp_name'], public_path(). "/images/". Auth::id() . "/". $inputs['thumbnail_img']);
        //tmp_name,thumbnail_img、フォームリクエストのバリデーション
      }

      //DBに情報を保存
      $this->dailyReports->fill($inputs)->save();


      //カテゴリーを追加した場合
      if (isset($inputs['category'])) {
        $lastInsertId = $this->dailyReports->id;
        $records = [];

        for ($i = 0; $i< count($inputs['category']); $i++) {
          $records[$i] = [
            'content_id' => config('const.ContentsId.DAILY_REPORTS'),
            'record_id' => $lastInsertId,
            'category_id' => $this->categories->where('name', $inputs['category'][$i])->value('id')
          ];
        }
        $this->categoryOfContents->insert($records);
      }

      //リダイレクト
      return redirect()->route('dailyReport.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
