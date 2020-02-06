@php
    $id = $food->ID;
    $name = $food->post_title;
    $img = get_post_thumbnail_id($id);
    $hover = get_field('hover', $id)['ID'];
    $menu = get_field('menu', $id);
@endphp

<article class="food" data-aos="flip-down">
    {!! image($img, 'food', 'food__image') !!}
    @if ($hover)
    {!! image($hover, 'food', 'food__image food__image--hover') !!}    
    @endif
    <header class="food__header">
        <h3 class="food__title subtitle">
            {{ $name }}
        </h3>
    </header>
    @if ($menu)
    <button class="food__menu minor-text" href="{{ $menu['url'] }}" data-fancybox="{{ $name }}">
        ZOBACZ MENU
    </button>
    @endif
</article>