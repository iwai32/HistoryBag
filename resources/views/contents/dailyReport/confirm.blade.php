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
    @component('contents.components.definitionList')
    @slot('titleContent')
    タイトルコンテンツ
    @endslot

    @slot('categoryContent')
    カテゴリ内容
    @endslot

    @slot('dateContent')
    日付/の/コンテンツ
    @endslot
    @endcomponent

    <p class="contents-text">
      {{ '日報機能の確認画面のテキ' }}
    </p>

    <div class="confirm-area">
      <p class="confirm-area__message">上記の内容で保存しますか？</p>

      <div class="confirm-btn-wrapper">
        <button class="btn">作成する</button>
        <button class="btn reset">やり直す</button>
      </div>
    </div>
  </div>
</div>
@endsection