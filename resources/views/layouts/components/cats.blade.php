@php
    $cats = $data;
@endphp

@if($cats)
<section class="cats section">
    <div class="container">
        <ul class="cats__list">
            @foreach ($cats as $item)
            @php
                $img = get_field('thumbnail', 'category_'.$item->term_id)['ID'];
            @endphp
            <li class="cats__item">
                <a href="{{  get_category_link($item) }}" class="cats__elem">
                    <h3 class="subtitle cats__title">
                        {{ $item -> name }}
                    </h3>
                    <span class="cats__button button button--transparent button--red">
                        Zobacz produkty
                    </span>
                    {!! image($img, 'full', 'cats__img') !!}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif
