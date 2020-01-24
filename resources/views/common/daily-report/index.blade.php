@extends('layouts.app')

@section('contents')
  <div class="inner daily-report-inner">
    <ol class="report-list">
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