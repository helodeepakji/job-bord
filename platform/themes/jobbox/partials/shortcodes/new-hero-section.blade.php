<style>
    .hero-section {
        background-color: #212529;
        padding: 5rem 0;
        color: white;
        text-align: center;
    }

    .hero-section__title {
        font-size: 3.5rem;
        font-weight: 700;
        max-width: 800px;
        margin: 0 auto 1.5rem;
        line-height: 1.2;
        color: white;
    }

    .hero-section__description {
        font-size: 1.125rem;
        max-width: 600px;
        margin: 0 auto 2rem;
        color: rgba(255, 255, 255, 0.8);
    }

    .hero-section__button {
        background-color: #0d6efd;
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 6px;
        border: none;
        font-weight: 500;
        margin-bottom: 4rem;
        transition: background-color 0.2s;
    }

    .hero-section__button:hover {
        background-color: #0b5ed7;
    }

    .feature-card {
        background-color: white;
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        text-align: center;
    }

    .feature-card__icon {
        width: 48px;
        height: 48px;
        margin-bottom: 1.5rem;
        color: #0d6efd;
    }

    .feature-card__title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: #212529;
    }

    .feature-card__description {
        color: #6c757d;
        margin: 0;
        line-height: 1.6;
    }

    @media (max-width: 767.98px) {
        .hero-section__title {
            font-size: 2.5rem;
            padding: 0 1rem;
        }

        .hero-section__description {
            padding: 0 1rem;
        }

        .feature-card {
            margin-bottom: 1rem;
        }
    }
</style>
<section class="hero-section">
    <div class="container">
        <h1 class="hero-section__title">
            {{ BaseHelper::clean($shortcode->hero_title ?? 'Take quick action that increases your brand\'s regular profit.') }}
        </h1>
        <p class="hero-section__description">
            {{ BaseHelper::clean($shortcode->hero_description ?? 'If you have ever wondered how to develop your brand, this is the place for you. Take a big step forward in growing your business with this great tool.') }}
        </p>
        <a href="{{ BaseHelper::clean($shortcode->button_link ?? 'Try Demo') }}">
        <button class="hero-section__button">{{ BaseHelper::clean($shortcode->hero_button_text ?? 'Try Demo') }}</button></a>

        <div class="row g-4">
            <!-- Feature 1 -->
            <div class="col-md-4">
                <div class="feature-card">
                    <img class="feature-card__icon" src="{{ RvMedia::getImageUrl($shortcode->image1) }}" />
                    <h3 class="feature-card__title">
                        {{ BaseHelper::clean($shortcode->feature_1_title ?? 'Spectacular team plan') }}</h3>
                    <p class="feature-card__description">
                        {{ BaseHelper::clean($shortcode->feature_1_description ?? 'Fairly assigning daily tasks to your employees') }}
                    </p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="col-md-4">
                <div class="feature-card">
                    <img class="feature-card__icon" src="{{ RvMedia::getImageUrl($shortcode->image2) }}" />
                    <h3 class="feature-card__title">
                        {{ BaseHelper::clean($shortcode->feature_2_title ?? 'Sharable showcase') }}</h3>
                    <p class="feature-card__description">
                        {{ BaseHelper::clean($shortcode->feature_2_description ?? 'Team members will be up to date on the project') }}
                    </p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="col-md-4">
                <div class="feature-card">
                    <img class="feature-card__icon" src="{{ RvMedia::getImageUrl($shortcode->image3) }}" />
                    <h3 class="feature-card__title">
                        {{ BaseHelper::clean($shortcode->feature_3_title ?? 'Generate messages') }}</h3>
                    <p class="feature-card__description">
                        {{ BaseHelper::clean($shortcode->feature_3_description ?? 'More interesting writings for your customers') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
