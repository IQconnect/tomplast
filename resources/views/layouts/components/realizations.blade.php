@php
    $realizations = $data['realizations'];
@endphp

@if($realizations)
<section class="realizations">
    <header class="realizations__header">
        <h2 class="realizations__title subtitle">
            Nasze Realizajce
        </h2>
    </header>
    <ul class="realizations__list">
        @foreach ($realizations as $item)
        @php
            $id = $item->ID;
            $url = get_permalink( $id);
            $img = get_post_thumbnail_id($id );
            $title = $item->post_title;
            $excerpt = $item->post_excerpt;
        @endphp
        <li class="realizations__item">
            <a href="{{ $url }}">
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
                    <span class="realizations__button button button--transparent button--red">
                        {{ 'Zobacz Realizacje' }}
                    </span>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</section>
@endif
