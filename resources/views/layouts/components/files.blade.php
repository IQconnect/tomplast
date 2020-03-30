@php
    $files = $data['files'];
    $title = $data['files_title'];
    $rand = rand();
@endphp

@if($files)
<section class="files section">
    <div class="container">
        <h2 class="subtitle files__title">
            {{ $title }}
        </h2>
        <ul class="files__list">
            @foreach ($files as $item)
            @php
                $file = $item['file'];
                $img = $item['thumb'];

                $link = $file['url'];

                if(!$file) {
                    $link = $img['url'];
                }
            @endphp
            <li class="files__item">
                <a href="{{ $link }}"  class="files__elem" data-fancybox={{ $rand }}>
                    {!! image($img['id'], 'full', 'files__img') !!}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endif