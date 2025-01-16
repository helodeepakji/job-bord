<style>
    .feature-section {
        padding: 4rem 0;
    }
    
    .feature-image__wrapper {
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }
    
    .feature-image__icon {
        width: 48px;
        height: 48px;
        color: white;
        opacity: 0.7;
    }
    
    .feature-heading {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 3rem;
        line-height: 50px;
    }
    
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 2rem;
    }
    
    .feature-item {
        display: flex;
    }
    
    .feature-item__number {
        width: 32px;
        height: 32px;
        background-color: #0d6efd;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
        aspect-ratio: 1;
        margin: 1rem;
    }
    
    .feature-item__text {
        margin: 0;
        color: #6c757d;
        line-height: 1.6;
    }
    
    @media (max-width: 991.98px) {
        .feature-image__wrapper {
            margin-bottom: 3rem;
        }
    }
    
    @media (max-width: 767.98px) {
        .feature-grid {
            grid-template-columns: 1fr;
        }
        
        .feature-heading {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
    }
</style>


<section class="feature-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="feature-image__wrapper">
                    <img src="{{ RvMedia::getImageUrl($shortcode->feature_image) }}" alt="Feature Image">
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="feature-heading">{{ BaseHelper::clean($shortcode->feature_heading ?? 'Lorem ipsum dolor sit amet consectetur') }}</h1>
                <div class="feature-grid">
                    <div class="feature-item">
                        <div class="feature-item__number">1</div>
                        <p class="feature-item__text">{{ BaseHelper::clean($shortcode->feature_item_1 ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-item__number">2</div>
                        <p class="feature-item__text">{{ BaseHelper::clean($shortcode->feature_item_2 ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-item__number">3</div>
                        <p class="feature-item__text">{{ BaseHelper::clean($shortcode->feature_item_3 ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-item__number">4</div>
                        <p class="feature-item__text">{{ BaseHelper::clean($shortcode->feature_item_4 ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
