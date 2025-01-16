<style>
    .pricing-section {
        padding-bottom: 3rem;
        text-align: center;
    }

    .pricing-section__label {
        color: #6c757d;
        font-size: 0.875rem;
        margin-bottom: 1rem;
    }

    .pricing-section__title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: normal;
    }

    .pricing-section__description {
        color: #6c757d;
        max-width: 600px;
        margin: 0 auto 2rem;
        line-height: 1.6;
    }

    .pricing-toggle {
        display: inline-flex;
        background: #f8f9fa;
        border-radius: 6px;
        padding: 0.25rem;
        margin-bottom: 3rem;
    }

    .pricing-toggle__button {
        padding: 0.5rem 1.5rem;
        border: none;
        background: none;
        border-radius: 4px;
        font-weight: 500;
        color: #6c757d;
    }

    .pricing-toggle__button.active {
        background-color: #0d6efd;
        color: white;
    }

    .pricing-card {
        background: white;
        border-radius: 12px;
        padding: 2rem;
        height: 100%;
        text-align: left;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    .pricing-card--highlighted {
        background: #0d6efd;
        color: white;
    }

    .pricing-card__type {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .pricing-card__price {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }

    .pricing-card__feature {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        color: inherit;
    }

    .pricing-card__feature svg {
        width: 20px;
        height: 20px;
        margin-right: 0.75rem;
        opacity: 0.7;
    }

    .pricing-card__button {
        display: block;
        width: 100%;
        padding: 0.75rem;
        border-radius: 6px;
        border: none;
        font-weight: 500;
        margin-top: 2rem;
        text-align: center;
        text-decoration: none;
    }

    .pricing-card--highlighted .pricing-card__button {
        background: white;
        color: #0d6efd;
    }

    .pricing-card:not(.pricing-card--highlighted) .pricing-card__button {
        background: #0d6efd;
        color: white;
    }

    .maxwidth {
        max-width: 350px;
    }

    @media (max-width: 991.98px) {
        .pricing-card {
            margin-bottom: 1.5rem;
        }
    }
</style>

<section class="pricing-section">
    <div class="container">
        <div class="pricing-section__label">{!! BaseHelper::clean($shortcode->pricing_label ?? 'Lorem ipsum') !!}</div>
        <h1 class="pricing-section__title">{!! BaseHelper::clean($shortcode->pricing_title ?? 'Lorem ipsum dolor sit amet consecutar domor at elis') !!}</h1>
        <p class="pricing-section__description">{!! BaseHelper::clean($shortcode->pricing_description ?? 'Lorem ipsum dolor sit amet consecutar domor at elis') !!}</p>

        <div class="pricing-toggle">
            <button class="pricing-toggle__button active" data-period="monthly">Monthly</button>
            <button class="pricing-toggle__button" data-period="yearly">Yearly</button>
        </div>

        <div class="row g-5" style="justify-content: center;">
            <div class="col-lg-4 maxwidth">
                <div class="pricing-card">
                    <div class="pricing-card__type">{!! BaseHelper::clean($shortcode->plan_1 ?? 'Starter') !!}</div>
                    <div class="pricing-card__price" data-monthly="{!! BaseHelper::clean($shortcode->plan_1_price ?? '$00') !!}"
                        data-yearly="{!! BaseHelper::clean($shortcode->plan_1_price_year ?? '$00') !!}">{!! BaseHelper::clean($shortcode->plan_1_price ?? '$00') !!}</div>
                    <div class="pricing-card__features">
                        <div class="pricing-card__features">
                            @php
                                $features = explode("/n", $shortcode->plan_1_features ?? '');
                                $features = array_filter($features);
                            @endphp

                            @foreach ($features as $feature)
                                <div class="pricing-card__feature">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {!! BaseHelper::clean(str_replace("/n", ' ', $feature ?? '')) !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="{!! BaseHelper::clean($shortcode->plan_1_link ?? 'Pro') !!}">
                        <button class="pricing-card__button">Action</button></a>
                </div>
            </div>
            <div class="col-lg-4 maxwidth">
                <div class="pricing-card pricing-card--highlighted">
                    <div class="pricing-card__type">{!! BaseHelper::clean($shortcode->plan_2 ?? 'Pro') !!}</div>
                    <div class="pricing-card__price" data-monthly="{!! BaseHelper::clean($shortcode->plan_2_price ?? '$00') !!}"
                        data-yearly="{!! BaseHelper::clean($shortcode->plan_2_price_year ?? '$00') !!}">{!! BaseHelper::clean($shortcode->plan_2_price ?? '$00') !!}</div>
                    <!-- Features remain the same -->
                    <div class="pricing-card__features">
                        <div class="pricing-card__features">
                            @php
                                $features = explode("/n", $shortcode->plan_2_features ?? '');
                                $features = array_filter($features);
                            @endphp
                            @foreach ($features as $feature)
                                <div class="pricing-card__feature">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {!! BaseHelper::clean($feature) !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="{!! BaseHelper::clean($shortcode->plan_2_link ?? 'Pro') !!}">
                    <button class="pricing-card__button">Action</button></a>
                </div>
            </div>
            <div class="col-lg-4 maxwidth">
                <div class="pricing-card">
                    <div class="pricing-card__type">{!! BaseHelper::clean($shortcode->plan_3 ?? 'Premium') !!}</div>
                    <div class="pricing-card__price" data-monthly="{!! BaseHelper::clean($shortcode->plan_3_price ?? '$00') !!}"
                        data-yearly="{!! BaseHelper::clean($shortcode->plan_3_price_year ?? '$00') !!}">{!! BaseHelper::clean($shortcode->plan_3_price ?? '$00') !!}</div>
                    <div class="pricing-card__features">
                        <div class="pricing-card__features">
                            @php
                                $features = explode("/n", $shortcode->plan_3_features ?? '');
                                $features = array_filter($features);
                            @endphp
                            @foreach ($features as $feature)
                                <div class="pricing-card__feature">
                                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    {!! BaseHelper::clean($feature) !!}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a href="{!! BaseHelper::clean($shortcode->plan_3_link ?? 'Pro') !!}">
                        <button class="pricing-card__button">Action</button></a>
                </div>
            </div>
        </div>

    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('.pricing-toggle__button');
        const priceElements = document.querySelectorAll('.pricing-card__price');

        toggleButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Update active state of buttons
                toggleButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Update prices based on selected period
                const period = button.dataset.period;
                priceElements.forEach(priceEl => {
                    const price = priceEl.dataset[period];
                    priceEl.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        priceEl.textContent = `${price}`;
                        priceEl.style.transform = 'scale(1)';
                    }, 150);
                });
            });
        });
    });
</script>
