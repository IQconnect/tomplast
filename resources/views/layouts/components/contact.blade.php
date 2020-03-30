<section class="section contact">
    <div class="container">
        <div class="contact__wrapper">
            <div class="contact__form">
                {!! do_shortcode( '[contact-form-7 id="126" title="Formularz 1"]') !!}
            </div>
            <div class="contact__info">
                <h3 class="contact__title major-text">
                    {{ pll_e('info') }}
                </h3>
                @php
                    $class = "contact__content";
                    $content = option("contact-contact");
                @endphp

                <div class="{{ $class }}">
                    {!! $content !!}
                </div>
            </div>
            <div class="contact__dropdowns">
                <div>
                    <h3 class="major-text">
                        Lorem Ipsum
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>