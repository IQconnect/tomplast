@php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
@endphp

<header class="header" header>
  <div class="container">
    <div class="header__wrapper">
      <a class="header__brand-wrapper" href="{{ home_url('/') }}">
        <img class="header__brand" src="{{  get_field('logo', 'options')['url'] }}" alt="Tomplast">
      </a>
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
      <nav class="header__nav" data-nav>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
