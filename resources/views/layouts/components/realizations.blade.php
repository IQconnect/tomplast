@php
  $realizations = $data['realizations'];
@endphp

@if($realizations)
  <section class="realizations">
    <header class="realizations__header">
      <h2 class="realizations__title subtitle">
        Nasze Realizajce
      </h2>
      <a class="realizations__btn button button--transparent button--red"
        href="{{ get_post_type_archive_link( 'realizacje' ) }}">
        Zobacz wszystkie
      </a>
    </header>
    <ul class="realizations__list">
      @foreach($realizations as $item)
        @php
          $id = $item->ID;
          $permalink = get_permalink($id);
          $img = get_post_thumbnail_id($id );
          $url = wp_get_attachment_image_url( $img, 'full' );
          $title = $item->post_title;
          $excerpt = $item->post_excerpt;
        @endphp

        <li class="realizations__item">
          <a href="{{ $permalink }}">
            {!! image($img, 'realization', 'realizations__img') !!}
            <div class="realizations__content">
              <span class="realizations__count major-text">
                {{ $loop->index + 1 }}
              </span>
              <h3 class="realizations__name major-text">
                {{ $title }}
              </h3>
              <p class="realizations__text text">
                {{ $excerpt }}
              </p>
            </div>
          </a>
        </li>
      @endforeach
    </ul>
  </section>
@endif
