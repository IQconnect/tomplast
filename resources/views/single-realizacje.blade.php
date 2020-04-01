@extends('layouts.app')

@section('content')

@include('layouts.components.small-hero', [on=>'true'])

@php
  $gallery = get_field('gallery');
  $dsc = get_field('Opis');
  $range = get_field('Zakres');
  $products = get_field('Produkty');
@endphp

<section class="s-realization section">
  <div class="container">
    <div class="s-realization__wrapper">
      @if($dsc)
        <!-- Opis -->
        <div class="s-realization__col">
          <h3 class="s-realization__title major-text major-text--special">
            {{ __('Opis', 'Tomplast') }}
          </h3>
          <div class="text">
            {!! $dsc !!}
          </div>
        </div>
      @endif

      @if($range)
        <!-- Zakres -->
        <div class="s-realization__col">
          <h3 class="s-realization__title major-text major-text--special">
            {{ __('Zakres', 'Tomplast') }}
          </h3>
          <div class="text">
            {!! $range !!}
          </div>
        </div>
      @endif

      @if($products)
        <!-- Produkty -->
        <div class="s-realization__col">
          <h3 class="s-realization__title major-text major-text--special">
            {{ __('Produkty', 'Tomplast') }}
          </h3>
          {!! $products !!}
        </div>
      @endif
    </div>
    @if($gallery)
      <ul class="s-realization__gallery gallery-box">
        @foreach($gallery as $item)
          <li class="gallery-box__item">
            <a href="{{ $item[url] }}" data-fancybox="gallery-box">
              {!! image($item['ID'], 'medium', 'gallery-box__img') !!}
            </a>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
</section>

@endsection
