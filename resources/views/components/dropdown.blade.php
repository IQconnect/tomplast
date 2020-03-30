@php
  $dropdown = option('dropdown');
@endphp
@if($dropdown)
  <section class="section dropdown">
    <div class="container">
      @foreach($dropdown as $item)
        @php
          $content = $item['content'];
        @endphp
        <div class="dropdown__content">
          <h2 class="dropdown__title major-text">
            {!! $content['Title'] !!}
          </h2>
          @if($content['dropdown-content'])
            <ul class="dropdown__wrapper">
              @foreach($content['dropdown-content'] as $content)
                <li class="dropdown__col dropdown__col--{{ $content['col'] }}">
                  {!! $content['content'] !!}
                </li>
              @endforeach
            </ul>
          @endif
        </div>
      @endforeach
    </div>
  </section>
@endif
