@extends('layouts.contents')

@section('contentsName', 'daily-report')
@section('contents')
<div class="inner">
  @component('contents.components.pageTitle')
    @slot('pageTitle')
    日報
    @endslot
    @slot('pageSubTitle')
    新規作成
    @endslot
  @endcomponent

  <div class="daily-report__frame">
    <form action="{{ route('dailyReport.confirm') }}" class="create-form" method="post">
      @component('contents.components.definitionList')
        @slot('titleContent')
        <input class="create-form__input title" type="text" name="title" id="title">
        @endslot

        @slot('categoryContent')
          @component('contents.components.categoryWrapper')
          @endcomponent
        @endslot

        @slot('dateContent')
        <input  class="create-form__input date" type="date" name="date" id="date">
        @endslot
      @endcomponent

      <div class="create-form__content-wrapper">
        <textarea class="textarea" name="content" id="content"
        placeholder="気づいたことや反省点、成果やこれからの目標などを投稿してみましょう。"></textarea>
      </div>

      <div class="create-form__btn-wrapper">
        <button class="btn">作成する</button>
        <button class="btn reset">やり直す</button>
      </div>
      @csrf
      <input class="input-hidden" type="checkbox" name="category">
    </form>
  </div>
</div>
@endsection