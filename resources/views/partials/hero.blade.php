<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg"
            data-setbg="https://images.unsplash.com/photo-1526815456940-2c11653292a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
            style="max-height: 100vh">
            <div class="hero__text">
                <p style="margin-top: 90px;">Changing lives one colorful note at a time</p>
                <a href="{{ Route('about') }}" class="primary-btn">Discover more</a>
                @include('partials.socials')
            </div>
        </div>
        <div class="hero__items set-bg"
            data-setbg="https://images.unsplash.com/photo-1526815456940-2c11653292a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
            style="max-height: 100vh">
            <div class="hero__text mt-4">
                <p style="margin-top: 80px; font-size:20px">Quality is not only our standard</p>
                <a href="{{ Route('about') }}" class="primary-btn">Our Work</a>
                @include('partials.socials')
            </div>
        </div>
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
