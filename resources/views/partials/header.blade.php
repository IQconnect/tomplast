@php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
@endphp

<header class="header" data-header>
  <div class="container container--fluid">
    <div class="header__wrapper">
      <a class="header__brand-wrapper" href="{{ home_url('/') }}">
        <img class="header__brand" src="{{  get_field('logo', 'options')['url'] }}" alt="Tomplast">
      </a>
      <div class="header__extras">
        @include('blocks.lg-pick')
        @include('blocks.hamburger')
      </div>
      <nav class="header__nav nav" data-menu>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
