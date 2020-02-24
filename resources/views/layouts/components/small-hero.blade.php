@php
    $small_hero = $data;
    $img = $small_hero['img'];
    $title = $small_hero['content']['title'];
    $text = $small_hero['content']['text'];
    $link = $small_hero['content']['link'];
@endphp

@if($small_hero)
<section class="small-hero">
    <div class="small-hero__cell">
        <img src="{{ $img['url'] }}" alt="{{ $title }}" class="small-hero__image" data-0="object-position:0 0" data-500="object-position:0 10px">
        <div class="small-hero__wrapper container" data-0="transform:scale(1); opacity: 1;" data-500="transform:scale(0.4); opacity: 0;">
            <div class="small-hero__content">
                @if ($title)
                <h2 class="small-hero__title title">
                    {!! $title !!}
                </h2>
                @endif
                @if($text)
                <p class="small-hero__text text">
                    {!! $text !!}
                </p>
                @endif
                @if ($link)
                <a class="small-hero__link button" href="{{ $link['url'] }}" target={{$link['target']}}>
                    {{ $link['title'] }}
                </a>
                @endif
            </div>
        </div>
    </div>  
</section>

@endif