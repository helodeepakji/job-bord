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
    <h2 class="pb-2 text-center">{{ Arr::get($shortcode, 'title', 'Icon grid is element nice') }}</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 g-4 py-5 deep-upper-box">
        @for ($i = 1; $i <= 6; $i++)
            <div class="col d-flex align-items-start deep-box">
                <img width="20%"
                    src="{{ RvMedia::getImageUrl(Arr::get($shortcode, 'item' . $i . '_image')) ?: 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/2048px-User_icon_2.svg.png' }}"
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
