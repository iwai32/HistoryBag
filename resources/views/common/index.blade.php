@extends('layouts.app')

@section('contents')
  <div class="inner daily-report-inner">
    <!-- 共通コンポーネント未定 -->
    <div class="report-search-wrapper">
      <form action="#" method="get">
        <div class="report-search">
          <input class="report-search__keyword" type="search" name="keyword">
          <button class="report-search__button" type="button"><i class="fas fa-search"></i></button>
        </div>
      </form>
    </div>

    <ol class="report-list">
      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="https://placehold.jp/280x160.png" loading="lazy" alt="">
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
            <p class="is-favorite"><i class="far fa-star"></i></p>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="https://placehold.jp/280x160.png" loading="lazy" alt="">
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
            <p class="is-favorite"><i class="far fa-star"></i></p>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="https://placehold.jp/280x160.png" loading="lazy" alt="">
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
            <p class="is-favorite"><i class="far fa-star"></i></p>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="https://placehold.jp/280x160.png" loading="lazy" alt="">
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
            <p class="is-favorite"><i class="far fa-star"></i></p>
          </div>
        </article>
      </li>

      <li class="report-list__item">
        <article class="report-cell">
          <a href="#" class="report-cell__link">
            <figure class="report-cell__photo">
              <img src="https://placehold.jp/280x160.png" loading="lazy" alt="">
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
            <p class="is-favorite"><i class="far fa-star"></i></p>
          </div>
        </article>
      </li>
    </ol>

    <!-- <div class="pager"></div> -->
  </div>
@endsection