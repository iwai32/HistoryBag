@extends('layouts.contents')
@section('globalSearcher')
  @component('contents.components.globalSearcher')
  @endcomponent
@endsection

@section('contents')
  <div class="inner">
    <h2 class="daily-report__top-title">日報トップページ</h2>
    <div class="report-operation">
      <ul class="report-operation__nav">
        <li class="report-operation__nav__list">
          <a class="btn create-btn" href="{{ route('dailyReport.create') }}"><span>create</span><i class="fas fa-plus-circle"></i></a>
        </li>
        <li class="report-operation__nav__list">
          <button class="btn delete-btn" type="button"><span>delete</span><i class="fas fa-trash-alt"></i></button>
        </li>
      </ul>
    </div>

    <ol class="report-list">
      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="{{ asset('images/4/cat_sample01.jpg') }}" loading="lazy" alt="">
            </figure>
            <div class="report-cell__header">
              <p class="report-cell__date">2020/01/31</p>
            </div>
            <div class="report-cell__body">
              <h2 class="report-cell__title">今日の活動報告</h2>
            </div>
          </a>
          <div class="report-cell__footer">
            <ul class="tags">
              <li class="tags__item"><a href="#">HTML</a></li>
              <li class="tags__item"><a href="#">CSS</a></li>
            </ul>
          </div>
          <div class="report-cell__favorite">
            <a href="#" class="report-cell__favorite__link">
              <p class="is-favorite"><i class="far fa-star"></i><i class="fas fa-star"></i></p>
            </a>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="http://placekitten.com/280/160" loading="lazy" alt="">
            </figure>
            <div class="report-cell__header">
              <p class="report-cell__date">2020/01/31</p>
            </div>
            <div class="report-cell__body">
              <h2 class="report-cell__title">今日の活動報告</h2>
            </div>
          </a>
          <div class="report-cell__footer">
            <ul class="tags">
              <li class="tags__item"><a href="#">HTML</a></li>
              <li class="tags__item"><a href="#">CSS</a></li>
            </ul>
          </div>
          <div class="report-cell__favorite">
            <a href="#" class="report-cell__favorite__link">
              <p class="is-favorite"><i class="far fa-star"></i><i class="fas fa-star"></i></p>
            </a>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="http://placekitten.com/280/160" loading="lazy" alt="">
            </figure>
            <div class="report-cell__header">
              <p class="report-cell__date">2020/01/31</p>
            </div>
            <div class="report-cell__body">
              <h2 class="report-cell__title">今日の活動報告</h2>
            </div>
          </a>
          <div class="report-cell__footer">
            <ul class="tags">
              <li class="tags__item"><a href="#">HTML</a></li>
              <li class="tags__item"><a href="#">CSS</a></li>
            </ul>
          </div>
          <div class="report-cell__favorite">
            <a href="#" class="report-cell__favorite__link">
              <p class="is-favorite"><i class="far fa-star"></i><i class="fas fa-star"></i></p>
            </a>
          </div>
        </article>
      </li>
    </ol>

    <!-- <div class="pager"></div> -->
  </div>
@endsection