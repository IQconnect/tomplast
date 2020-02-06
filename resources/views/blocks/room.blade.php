@php
    $id = $room->ID;
    $name = $room->post_title;
    $img = get_post_thumbnail_id($id);
    $hover = get_field('hover', $id)['ID'];
    $price = get_field('price', $id);
    $ppl = get_field('ppl', $id);
@endphp

<article class="room">
    {!! image($img, 'room', 'room__image') !!}
    @if ($hover)
    {!! image($hover, 'room', 'room__image room__image--hover') !!}    
    @endif
    <header class="room__header">
        <h3 class="room__title subtitle">
            {{ $name }}
        </h3>
        <span class="room__price minor-text">
            {{ $price }}
        </span>
    </header>
    <p class="room__info minor-text">
        {{ $ppl }}
    </p>
</article>