<section class="section page-content">
    <div class="container">
        @while (have_posts())
            @php the_post() @endphp
            {!! the_content() !!}
        @endwhile
    </div>
</section>

