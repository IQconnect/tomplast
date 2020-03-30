@php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
  $header_img = option('header_img')['id'];
@endphp

<header class="header" data-header>
  <div class="container container--fluid">
    <div class="header__wrapper">
      <a class="header__brand-wrapper" href="{{ home_url('/') }}">
        <h1 class="header__brand">
          <img src="{{  get_field('logo', 'options')['url'] }}" alt="Tomplast">
        </h1>
      </a>
      <div class="header__info" data-time>
        <p class="small-title">
          {{ pll__('firma-czynna') }}
          <span class="header__open">
            {{ pll__('firma-open') }} <span data-hour>4</span> h. <span data-min>4</span> min. <span data-sec>4</span> s.
          </span>
          <span class="header__close">
            {{ pll__('firma-close') }}
          </span>
        </p>
      </div>
      <div class="header__extras">
        @include('blocks.lg-pick')
        @include('blocks.hamburger')
      </div>
      <nav class="header__nav nav" data-menu>
        {!! image($header_img, 'full', 'nav__bg') !!}
        <div class="container">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
          @endif
          @include('blocks.contact-header')
        </div>
      </nav>
    </div>
  </div>
</header>
