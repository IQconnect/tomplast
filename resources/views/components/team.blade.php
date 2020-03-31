@php
  $team = option('team');
@endphp
@if($team)
  <section class="section team">
    <div class="container">
      @foreach($team as $item)
        @php
          $content = $item['content'];
        @endphp
        <div class="team__content">
          <h2 class="team__title subtitle">
            {!! $content['Title'] !!}
          </h2>
          @if($content['persons'])
            <ul class="team__wrapper">
              @foreach($content['persons'] as $content)
                <li class="team__col text">
                  <span class="team__name"> {{ $content['name'] }} </span>
                  <span class="team__job"> {{ $content['job'] }} </span>
                  <span class="team__tel">
                    T: <a
                      href="tel:{{ replace_ws($content['numer']) }}">{{ $content['numer'] }}</a>
                  </span>
                  <span class="team__tel">
                    E: <a
                      href="mailto:{{ replace_ws($content['mail']) }}">{{ $content['mail'] }}</a>
                  </span>
                  @if($content['link']['url'])
                    <a class="team__link"
                      href="{{ $content['link']['url'] }}">
                      <span class="team__icon fas fa-download"></span>
                    </a>
                  @endif
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      @endforeach
    </div>
  </section>
@endif
