<html>
<style>
    .c-hero-images {
        background-color: #222;
        position: fixed;
        transform: scale3d(1, 1, 1), translate3d(0, 0, 0);
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 50;
        backface-visibility: hidden;
    }

    .c-hero-images,
    .c-hero-video {
        -webkit-backface-visibility: hidden;
        overflow: hidden;
    }

    .c-hero-images,
    .c-hero-video {
        -webkit-font-smoothing: antialiased;
    }

    .c-hero-images__item {
        background-attachment: scroll;
        background-color: transparent;
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        bottom: 0;
        height: 100vh;
        left: 0;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .4s cubic-bezier(.165, .84, .44, 1) 0s;
        z-index: -100;
    }

    .c-hero-images *,
    .c-hero-images__item {
        transform: translate3d(0, 0, 0);
    }

    .c-hero-images__item,
    .c-hero-video video {
        min-width: 100%;
        min-height: 100%;
        width: auto;
    }

    .c-hero-images__item img,
    .no-js .c-hero-images,
    .no-js .c-hero-video,
    .touch .c-hero-video video {
        display: none;
    }

    .c-hero-images *,
    .c-hero-images__item {
        transform: translate3d(0, 0, 0);
    }

    img {
        border: 0;
        height: auto;
        width: 100%;
    }

    .c-hero {
        color: #fff;
        position: relative;
        top: 60px;
        z-index: 100;
        padding-bottom: 100px;
    }

    .c-hero__inner--full-height {
        height: 100vh;
    }

    .c-hero__inner {
        display: table;
        margin: 0 auto;
        position: relative;
        table-layout: fixed;
        width: 100%;
        padding: 0;
        text-align: center;
    }

    .c-hero__inner__cell {
        display: table-cell;
        height: 100%;
    }

    .c-filter-btn--cta,
    .c-hero__inner__cell,
    .c-list li:before,
    .c-logo-list__logo,
    .c-social li,
    .mfp-container:before,
    .mfp-content {
        vertical-align: middle;
    }

    .o-grid {
        zoom: 1;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        padding: 0 20px;
    }

    .c-hero__inner__cell h1,
    .u-lato-xlarge {
        font-size: 2rem;
        font-weight: 700;
    }

    .c-hero__inner__cell h1,
    .c-legal h1,
    .u-lato-large,
    .u-lato-xlarge {
        font-family: Lato, Arial, sans-serif;
    }

    .c-hero__inner__cell h1 {
        margin-bottom: .4em;
    }

    .c-hero__inner__cell h1+p {
        font-size: 1.75rem;
        font-weight: 700;
        line-height: 1.42857em;
        margin-top: 0;
        min-height: 5em;
        margin-bottom: 0;
    }

    .c-hero__inner__cell p {
        font-size: 1.25rem;
    }

    p {
        margin-bottom: 30px;
    }

    .c-hero__typed-text {
        border-bottom: 4px solid #82B541;
        transition: border-color .3s ease-in-out;
    }

    .typed-cursor {
        opacity: 1;
        animation: blink .7s infinite;
    }

    ol,
    ul {
        list-style: none;
    }

    .o-hero-buttons-wrapper li:first-child {
        text-align: center;
    }

    .o-hero-buttons-wrapper li {
        margin-bottom: 20px;
    }

    .c-icon-btn {
        background-color: transparent;
        border-radius: 4px;
        color: #fff;
        display: inline-block;
        padding: 11px 15px 11px 54px;
        position: relative;
        transition: all 220ms ease-in-out;
    }

    [class^=c-btn],
    a,
    button,
    input[type=text],
    textarea {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
        transition-duration: .3s;
        transition-property: background-color, color, opacity, border, border-color, background-position, outline, box-shadow, border-bottom, text-decoration, left, top, transform;
        transition-timing-function: cubic-bezier(.165, .84, .44, 1);
        transform-origin: center center;
    }

    a {
        background-color: transparent;
        text-decoration: none;
        color: #1FB4DA;
    }

    .c-icon-btn svg {
        left: 0;
        margin-top: -22px;
        position: absolute;
        top: 50%;
        width: 44px;
        height: 44px;
        transition: transform .3s ease-in-out;
        transform-origin: 50% 50%;
    }

    svg:not(:root) {
        overflow: hidden;
    }

    .c-svg--white {
        fill: #fff;
    }
</style>

<body>
    <aside role="complementary" class="c-hero-images">
        <ul>
            <li class="c-hero-images__item js-hero-img is-NOT-active"><img src="" data-src="https://envato.com/wp-content/themes/envato/assets/images/elements/hero-image-1.jpg" alt="Hero image with a woman at a rooftop">
            </li>
            <li class="c-hero-images__item js-hero-img is-active" style="background-image: url(images/hero-image-2.jpg);"><img src="" data-src="images/hero-image-2.jpg" alt="Hero image with woman at her desk with a computer">
            </li>
            <li class="c-hero-images__item js-hero-img"><img src="" data-src="https://envato.com/wp-content/themes/envato/assets/images/elements/hero-image-3.jpg" alt="Hero image with a man">
            </li>
            <li class="c-hero-images__item js-hero-img"><img src="" data-src="https://envato.com/wp-content/themes/envato/assets/images/elements/hero-image-4.jpg" alt="Hero image with a woman with her laptop in a park">
            </li>
            <li class="c-hero-images__item js-hero-img"><img src="" data-src="https://envato.com/wp-content/themes/envato/assets/images/elements/hero-image-5.jpg" alt="Hero image of mens hands and a laptop">
            </li>
            <li class="c-hero-images__item js-hero-img"><img src="" data-src="https://envato.com/wp-content/themes/envato/assets/images/elements/hero-image-6.jpg" alt="Hero image of a man sketching">
            </li>
        </ul>
    </aside>
    <section class="c-hero">
        <div class="c-hero__inner c-hero__inner--full-height">
            <div class="c-hero__inner__cell">
                <div class="o-grid">
                    <h1 id="js-second-animation-trigger" class="js-animate-slide-1">Welcome to Envato</h1>
                    <p class="js-animate-slide-1 js-jump-to-product ">We help
                        <span class="c-hero__typed-text js-typed">

                            <a href="" data-product-slider-slide="0">abbccdd</a>
                            <a href="" data-product-slider-slide="1">b</a>
                            <a href="" data-product-slider-slide="2">c</a>
                            <a href="" data-product-slider-slide="3">d</a>
                        </span>
                        <span class="typed-cursor">|</span>
                    </p>
                    <ul class="o-hero-buttons-wrapper">
                        <li class="js-animate-slide-1">
                            <a href="https://www.youtube.com/watch?v=uVju5--RqtY" class="c-icon-btn js-video-modal">
                                <svg class="c-svg c-svg--white">
                                    <use xlink:href="#icon-play1"></use>
                                </svg>
                                Play video</a>
                        </li>
                        <li class="js-animate-slide-1"><a href="#products" class="c-btn js-anchor-link">Get Started</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="c-hero__inner c-hero__inner--slide2">
            <div class="c-hero__inner__cell">
                <div class="js-hero__slide2">
                    <div class="o-grid">
                        <div class="c-hero__split-content">
                            <h2 class="animate-slide-2__title"><span class="animate-slide-2__title__item-1">Our community&nbsp;</span><span class="animate-slide-2__title__item-2">brings ideas to life</span></h2>
                            <p class="animate-slide-2__copy">Envato is the leading marketplace for creative assets and creative
                                people. Millions of people around the world choose our marketplace, studio and courses to buy files,
                                hire freelancers, or learn the skills needed to build websites, videos, apps, graphics and more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>