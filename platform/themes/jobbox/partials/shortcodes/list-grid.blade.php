<style>
    .deep-box {
        background: #ebf7f3;
        padding: 20px;
        width: 49%;
    }

    .deep-upper-box {
        gap: 10px;
    }

    @media (max-width: 600px) {
        .deep-box {
            width: 100%;
        }
    }
</style>
<div class="container px-4 py-5" id="icon-grid">
    <div class="pricing-section__label text-center">{!! BaseHelper::clean($shortcode->select_label ?? 'Lorem ipsum') !!}</div>
    <h2 class="pb-2 text-center">{{ Arr::get($shortcode, 'title', 'Icon grid is element nice') }}</h2>
    <p class="pricing-section__description text-center">{!! BaseHelper::clean($shortcode->select_description ?? 'Lorem ipsum dolor sit amet consecutar domor at elis') !!}</p>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 g-4 py-5 deep-upper-box">
        @for ($i = 1; $i <= 4; $i++)
            <div class="col d-flex align-items-start deep-box">
                <img width="20%"
                    src="{{ RvMedia::getImageUrl($shortcode->{'item' . $i . '_image'}) }}"
                    alt="{{ Arr::get($shortcode, 'item' . $i . '_title', 'Featured Item') }}" class="flex-shrink-0 me-3">
                <div>
                    <h4 class="fw-bold mb-0">{{ Arr::get($shortcode, 'item' . $i . '_title', 'Featured Title ' . $i) }}
                    </h4>
                    <p>{{ Arr::get($shortcode, 'item' . $i . '_description', 'Paragraph of text beneath the heading to explain the heading.') }}
                    </p>
                </div>
            </div>
        @endfor
    </div>
</div>
