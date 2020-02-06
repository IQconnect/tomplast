@php
  $madeby = option('logo-madeby')['url'];
@endphp

<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <div class="footer__copyright text text--bold text--white">
        {{ option("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ option('iqlogo')['url'] }}" alt="{{ option('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>