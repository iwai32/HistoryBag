@extends('layouts.contents')

@section('contentsName', 'daily-report')
@section('contents')
<div class="inner">
  @component('contents.components.pageTitle')
  @slot('pageTitle')
  日報
  @endslot

  @slot('pageSubTitle')
  確認画面
  @endslot
  @endcomponent

  <div class="daily-report__frame">
    <form action="{{ route('dailyReport.store') }}" method="post">
      @component('contents.components.definitionList')
      @slot('titleContent')
      {{ $inputs['title'] }}
      @endslot

      @slot('categoryContent')
      @isset($inputs['category'])
      <ul class="category-tag-wrapper">
        @foreach ($inputs['category'] as $category)
        <li class="category-tag">
          <p class="tag">{{ $category }}</p>
          <input class="input-hidden" type="checkbox" name="category[]" value="{{ $category }}" checked>
        </li>
        @endforeach
      </ul>
      @endisset
      @endslot

      @slot('dateContent')
      {{ $inputs['date'] }}
      @endslot

      @slot('photoContent')
      @isset($inputs['photo'])
      {{ $inputs['photo']->getClientOriginalName() }}
      @endisset
      @endslot
      @endcomponent

      <p class="contents-text">
        {{ $inputs['content'] }}
      </p>

      <div class="confirm-area">
        <p class="confirm-area__message">上記の内容で保存しますか？</p>

        <div class="confirm-btn-wrapper">
          <button class="btn">作成する</button>
          <button class="btn reset">やり直す</button>
        </div>
      </div>
      @csrf
      <input type="hidden" name="title" value="{{ $inputs['title'] }}">
      <input type="hidden" name="date" value="{{ $inputs['date'] }}">
      <input type="hidden" name="tmp_name" value="{{ $tmpName }}">
      @isset($inputs['photo'])
      <input type="hidden" name="thumbnail_img" value="{{ $inputs['photo']->getClientOriginalName() }}">
      @endisset
      <input type="hidden" name="content" value="{{ $inputs['content'] }}">
    </form>
  </div>
</div>
@endsection