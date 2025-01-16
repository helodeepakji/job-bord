<style>
    .dynamic-box .hero-section {
        text-align: center;
        padding: 4rem 1rem;
        background: white;
    }

    .dynamic-box .hero-section h1 {
        font-weight: bold;
    }

    .dynamic-box .feature-card {
        text-align: center;
        background: #ebf7f3;
    }

    .dynamic-box .feature-card i {
        font-size: 2rem;
        color: #1d4ed8;
        /* Icon color (blue) */
        margin-bottom: 1rem;
    }
</style>

<div class="dynamic-box">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <p class="text-muted mb-2">{{ BaseHelper::clean($shortcode->hero_subtitle ?? 'Develop your skill') }}</p>
            <h1 class="display-4">
                {{ BaseHelper::clean($shortcode->hero_title ?? 'Take care of your<br>performance every day.') }}</h1>
            <a href="{{ BaseHelper::clean($shortcode->button_link ?? 'Try for Free') }}">
                <button
                    class="btn btn-primary mt-3">{{ BaseHelper::clean($shortcode->hero_button_text ?? 'Try for Free') }}</button>
            </a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="{{ BaseHelper::clean($shortcode->feature1_icon ?? 'bi bi-lightning-charge') }}"></i>
                        <!-- Dynamic icon -->
                        <h5 class="fw-bold mt-3">{{ BaseHelper::clean($shortcode->feature1_title ?? 'Quick review') }}
                        </h5>
                        <p class="text-muted">
                            {{ BaseHelper::clean($shortcode->feature1_description ?? 'We make sure you get feedback the same day.') }}
                        </p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="{{ BaseHelper::clean($shortcode->feature2_icon ?? 'bi bi-sliders') }}"></i>
                        <!-- Dynamic icon -->
                        <h5 class="fw-bold mt-3">{{ BaseHelper::clean($shortcode->feature2_title ?? 'Easy changes') }}
                        </h5>
                        <p class="text-muted">
                            {{ BaseHelper::clean($shortcode->feature2_description ?? 'Options settings for customers convenience.') }}
                        </p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="{{ BaseHelper::clean($shortcode->feature3_icon ?? 'bi bi-box') }}"></i>
                        <!-- Dynamic icon -->
                        <h5 class="fw-bold mt-3">{{ BaseHelper::clean($shortcode->feature3_title ?? 'Place storage') }}
                        </h5>
                        <p class="text-muted">
                            {{ BaseHelper::clean($shortcode->feature3_description ?? 'Store projects in easily accessible catalogs.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>