@php
    $class = "contact-header";
    $content = option("contact-header");
@endphp

<div class="{{ $class }}">
    {!! $content !!}
</div>