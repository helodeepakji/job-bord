<style>
    .dynamic-ui-hero-section {
        padding: 3rem 1rem;
    }

    .dynamic-ui-hero-section .text-content h1 {
        font-weight: bold;
        font-size: 2rem;
        line-height: normal;
    }

    .dynamic-ui-hero-section .image-placeholder {
        background-color: #1d4ed8; /* Blue background */
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        border-radius: 8px;
        height: 100%;
    }

    .dynamic-ui-hero-section .image-placeholder img {
        border-radius: 8px;
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .dynamic-ui-hero-section .text-content h1 {
            font-size: 1.5rem;
        }

        .dynamic-ui-hero-section .text-content p {
            font-size: 1rem;
        }

        .dynamic-ui-hero-section .image-placeholder {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .dynamic-ui-hero-section .text-content h1 {
            font-size: 1.25rem;
        }

        .dynamic-ui-hero-section .image-placeholder {
            font-size: 1rem;
        }
    }
</style>

<section class="py-5 dynamic-ui-hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 text-content">
                <h1>{{ BaseHelper::clean($shortcode->hero_title ?? 'Expand your brand<br>with this excellent extension tool') }}</h1>
                <p class="text-muted mt-3">
                    {{ BaseHelper::clean($shortcode->hero_description ?? 'With this tool, you will get much better results at work and develop new skills. Will you take the risk of trying the latest version of our application?') }}
                </p>
                <a href="{{ BaseHelper::clean($shortcode->button_link ?? 'Try Demo') }}" class="btn btn-primary mt-3">
                    {{ BaseHelper::clean($shortcode->hero_button_text ?? 'Try Demo') }}
                </a>
            </div>
            <!-- Right Column: Dynamic Image -->
            <div class="col-lg-6">
                <div class="image-placeholder">
                    <img src="{{ RvMedia::getImageUrl($shortcode->hero_image ?? 'default-image.jpg') }}" alt="Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

