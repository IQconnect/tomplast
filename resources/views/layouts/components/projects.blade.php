@if($projects)
<section class="section projects">
    <div class="container">
        <ul class="projects__list">
            @foreach ($projects as $item)
            @php
                $img = get_post_thumbnail_id($item->ID);
                $gallery = get_field('gallery', $item->ID);

                if(!$gallery) {
                    $gallery = [];
                    array_push($gallery, ['url'=>get_the_post_thumbnail_url($item->ID)] );
                }
            @endphp
            <li class="projects__item">
                <a class="projects__elem" href="{{ $gallery[0]['url'] }}" data-fancybox="gallery{{$loop->index}}">
                    <div class="projects__img-wrapper">
                        {!! image($img, 'full', 'projects__img') !!}
                    </div>
                    <h3 class="projects__title text">
                        {{ $item->post_title }}
                    </h3>
                </a>
                @if($gallery)
                <ul hidden>
                    @foreach ($gallery as $item)
                    @if($loop->index > 0)
                    <li>
                        <a href="{{ $item[url] }}" data-fancybox="gallery{{$loop->parent->index}}"></a>
                    </li>
                    @endif
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif