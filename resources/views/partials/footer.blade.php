@php
  $madeby = option('logo-madeby')['url'];
  $logo = option('logo');
  $contact = option("contact-header");
  $certyfikaty = option('certyfikaty');
  $contact_logo = option('contact-logo');
  $contact_place = option('contact-place');
  $contact_odzial = option('contact-odzial');
  $contact_prod = option('contact-prod');
@endphp

@include('layouts.components.map')

<footer class="footer">
  <div class="footer__wrapper">
    <div class="container">
      <div class="footer__row">
        <div class="footer__col">
          <h3 class="footer__title small-title">
            {{ pll_e('kontakt') }}
          </h3>
          {!! $contact !!}
        </div>
        <div class="footer__col">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_one', 'menu_class' => 'footer__menu']) !!}
          @endif
        </div>
        <div class="footer__col">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_two', 'menu_class' => 'footer__menu']) !!}
          @endif
        </div>
        <div class="footer__col">
          @if ($certyfikaty)
          <ul class="footer__list">
            @foreach ($certyfikaty as $item)
            <li class="footer__item">
              {!! image($item['ID'], full, 'footer__cert-img') !!}
            </li>
            @endforeach
          </ul>
          @endif
        </div>
      </div>
      <div class="footer__row">
        <div class="footer__col">
          <img class="footer__logo" src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}">
          {!! $contact_logo !!}
        </div>
        <div class="footer__col">
          <h3 class="footer__title small-title">
            {{ pll_e('siedziba') }}
          </h3>
          {!! $contact_place !!}
        </div>
        <div class="footer__col">
          <h3 class="footer__title small-title">
            {{ pll_e('odział') }}
          </h3>
          {!! $contact_odzial !!}
        </div>
        <div class="footer__col">
          <h3 class="footer__title small-title">
            {{ pll_e('zaklad') }}
          </h3>
          {!! $contact_prod !!}
        </div>
      </div>
    </div>
  </div>
  <div class="footer__wrapper">
    <div class="container">
      <div class="footer__row footer__row--copyright">
        <p class="footer__copyright">
          {{ option("copyright") }}
        </p>
        <div class="footer__by">
          <a href="http://iqconnect.pl">
            <img src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>