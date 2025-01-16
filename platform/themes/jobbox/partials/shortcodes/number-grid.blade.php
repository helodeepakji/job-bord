<style>
    .dyanmic-ui .content h1 {
        font-weight: bold;
        margin-bottom: 1rem;
        font-size: 2rem;
        line-height: 50px;
    }

    .dyanmic-ui .content p {
        color: #6c757d; /* Bootstrap muted text color */
        font-size: 1rem;
    }

    .dyanmic-ui .content .btn {
        margin-top: 1rem;
    }

    .dyanmic-ui .numbered-grid {
        margin-top: 4rem;
    }

    .dyanmic-ui .numbered-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }

    .dyanmic-ui .number-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #1d4ed8;
        color: white;
        font-weight: bold;
        border-radius: 50%;
        margin-right: 1rem;
        flex-shrink: 0;
    }

    .dyanmic-ui .numbered-item p {
        margin: 0;
        font-size: 1rem;
    }

    .dyanmic-ui .image-placeholder {
        background-color: #1d4ed8;
        width: 100%;
        height: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        overflow: hidden;
    }

    .dyanmic-ui .image-placeholder img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .dyanmic-ui .content h1 {
            font-size: 1.5rem;
        }

        .dyanmic-ui .numbered-item {
            align-items: flex-start;
        }

        .dyanmic-ui .number-circle {
            margin-bottom: 0.5rem;
        }

        .dyanmic-ui .numbered-grid .col-md-4 {
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .dyanmic-ui .content h1 {
            font-size: 1.25rem;
        }

        .dyanmic-ui .number-circle {
            width: 30px;
            height: 30px;
            font-size: 0.875rem;
        }

        .dyanmic-ui .content .btn {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
        }
    }
</style>

<section class="py-5 dyanmic-ui">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 content">
                <p class="text-uppercase text-muted">
                    {{ BaseHelper::clean($shortcode->section_subtitle ?? 'Lorem ipsum') }}</p>
                <h1>{{ BaseHelper::clean($shortcode->section_title ?? 'Lorem ipsum dolor sit amet<br>consectetur domor at elis') }}
                </h1>
                <p>{{ BaseHelper::clean($shortcode->section_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.') }}
                </p>

                <a href="{{ BaseHelper::clean($shortcode->button_link ?? 'https://nxttour.in') }}">
                <button
                    class="btn btn-primary">{{ BaseHelper::clean($shortcode->section_button_text ?? 'Action') }}</button></a>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6">
                <div class="image-placeholder">
                    <img src="{{ RvMedia::getImageUrl($shortcode->section_image) }}" alt="Image">
                </div>
            </div>
        </div>

        <!-- Numbered Grid -->
        <div class="row numbered-grid">
            <!-- Grid Items -->
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">1</div>
                    <p>{{ BaseHelper::clean($shortcode->item1_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">2</div>
                    <p>{{ BaseHelper::clean($shortcode->item2_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">3</div>
                    <p>{{ BaseHelper::clean($shortcode->item3_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">4</div>
                    <p>{{ BaseHelper::clean($shortcode->item4_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">5</div>
                    <p>{{ BaseHelper::clean($shortcode->item5_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="numbered-item">
                    <div class="number-circle">6</div>
                    <p>{{ BaseHelper::clean($shortcode->item6_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
