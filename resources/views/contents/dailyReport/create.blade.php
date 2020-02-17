@extends('layouts.contents')

@section('contentsName', 'daily-report')
@section('contents')
<div class="inner">
  <h2 class="daily-report__create-title">日報&nbsp;<span class="sub-title">新規作成</span></h2>
  <div class="report-create-wrapper">
    <form action="#" class="create-form" method="post">
      <dl class="create-form__definition-list">
        <dt>タイトル</dt>
        <dd><input class="create-form__input title" type="text" name="title" id="title"></dd>

        <dt>カテゴリ</dt>
        <dd>
          <div class="create-form__category-wrapper">
            <div class="create-form__category-wrapper__select">
              <select class="create-form__category" name="category">
                <option value="その他" selected="selected">未分類</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="SQL">SQL</option>
                <option value="AWS">AWS</option>
                <option value="Linux">Linux</option>
              </select>
            </div>
          </div>
        </dd>

        <dt>日付</dt>
        <dd><input  class="create-form__input date" type="date" name="date" id="date"></dd>
      </dl>

      <div class="create-form__content-wrapper">
        <textarea class="create-form__textarea" name="content" id="content"
        placeholder="気づいたことや反省点、成果やこれからの目標などを投稿してみましょう。"></textarea>
      </div>

      <div class="create-form__btn-wrapper">
        <button class="create-form__btn">作成する</button>
        <button class="create-form__btn reset">やり直す</button>
      </div>
    </form>
  </div>
</div>
@endsection