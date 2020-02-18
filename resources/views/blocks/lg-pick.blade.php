@php
    $lg = ['PL', 'ENG', 'RU', 'DE'];
    $attr = array("display_names_as"=>'slug');
@endphp

@if ($lg)
<ul class="lg-pick" data-lg-pick>
    {{-- @foreach ($lg as $item)
    <li class="lg-pick__item @if($item == 'RU') -is-active @endif">
        <a class="lg-pick__wrapper text" href="#">
            {{ $item }}
            @if($item == 'RU') @include('svg.drop-down') @endif
        </a>
    </li>
    @endforeach --}}
    <?php pll_the_languages($attr); ?>
</ul>

@endif