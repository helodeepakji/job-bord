<style>
    .dyn-ui-bx .number-circle {
        width: 32px;
        height: 32px;
        background-color: #0d6efd;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
    }

    .dyn-ui-bx .side-items {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 8px;
    }

    .dyn-ui-bx .side-item {
        display: flex;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .dyn-ui-bx .side-item:last-child {
        margin-bottom: 0;
    }
</style>

<div class="container py-5 dyn-ui-bx">
    <div class="row">
        <div class="col-lg-6">
            <div class="pe-lg-5">
                <small class="text-muted">{{ BaseHelper::clean($shortcode->section_subtitle ?? 'Lorem ipsum') }}</small>
                <h1 class="display-5 fw-bold mb-4">
                    {{ BaseHelper::clean($shortcode->section_title ?? 'Lorem ipsum dolor sit amet consecutar domor at elis') }}
                </h1>
                <p class="lead mb-4">
                    {{ BaseHelper::clean($shortcode->section_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.') }}
                </p>
                <button
                    class="btn btn-primary px-4">{{ BaseHelper::clean($shortcode->button_text ?? 'Action') }}</button>
            </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0">
            <div class="side-items">
                <div class="side-item">
                    <div class="number-circle">1</div>
                    <div>
                        <p class="mb-0">
                            {{ BaseHelper::clean($shortcode->item1_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                        </p>
                    </div>
                </div>
                <div class="side-item">
                    <div class="number-circle">2</div>
                    <div>
                        <p class="mb-0">
                            {{ BaseHelper::clean($shortcode->item2_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                        </p>
                    </div>
                </div>
                <div class="side-item">
                    <div class="number-circle">3</div>
                    <div>
                        <p class="mb-0">
                            {{ BaseHelper::clean($shortcode->item3_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
