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
        flex-shrink: 0;
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

    .dyn-ui-bx h1 {
        font-size: 2.5rem;
        line-height: 1.2;
    }

    .dyn-ui-bx p {
        font-size: 1rem;
        color: #6c757d; /* Bootstrap muted color */
    }

    .dyn-ui-bx .btn {
        font-size: 1rem;
        padding: 0.75rem 1.5rem;
    }

    /* Responsive Styles */
    @media (max-width: 992px) { /* Tablet and smaller */
        .dyn-ui-bx h1 {
            font-size: 2rem;
        }

        .dyn-ui-bx .side-items {
            padding: 1.5rem;
        }

        .dyn-ui-bx .btn {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
        }
    }

    @media (max-width: 768px) { /* Mobile and smaller */
        .dyn-ui-bx h1 {
            font-size: 1.75rem;
        }

        .dyn-ui-bx .number-circle {
            width: 28px;
            height: 28px;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .dyn-ui-bx .btn {
            font-size: 0.875rem;
            /* width: 100%; */
            text-align: center;
        }

        .dyn-ui-bx p {
            font-size: 0.875rem;
        }
    }

    @media (max-width: 576px) { /* Small mobile */
        .dyn-ui-bx h1 {
            font-size: 1.5rem;
        }

        .dyn-ui-bx .side-items {
            padding: 1rem;
        }

        .dyn-ui-bx .btn {
            padding: 0.5rem;
        }
    }
</style>


<div class="container py-5 dyn-ui-bx">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="pe-lg-5">
                <small class="text-muted">{{ BaseHelper::clean($shortcode->section_subtitle ?? 'Lorem ipsum') }}</small>
                <h1 class="display-5 fw-bold mb-4">
                    {{ BaseHelper::clean($shortcode->section_title ?? 'Lorem ipsum dolor sit amet consecutar domor at elis') }}
                </h1>
                <p class="lead mb-4">
                    {{ BaseHelper::clean($shortcode->section_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.') }}
                </p>
                <a href="{{ BaseHelper::clean($shortcode->button_link ?? 'Action') }}">
                <button
                    class="btn btn-primary px-4">{{ BaseHelper::clean($shortcode->button_text ?? 'Action') }}</button></a>
            </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
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
