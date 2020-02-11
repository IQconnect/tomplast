@php
    $lg = ['PL', 'ENG', 'RU', 'DE'];
@endphp

@if ($lg)
<ul class="lg-pick" data-lg-pick>
    @foreach ($lg as $item)
    <li class="lg-pick__item @if($item == 'RU') -is-active @endif">
        <a class="lg-pick__wrapper text" href="#">
            {{ $item }}
            @if($item == 'RU') @include('svg.drop-down') @endif
        </a>
    </li>
    @endforeach
</ul>
@endif