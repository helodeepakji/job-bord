<style>
    .dyanmic-ui .content h1 {
        font-weight: bold;
        margin-bottom: 1rem;
    }

    .dyanmic-ui .content p {
        color: #6c757d;
        /* Bootstrap muted text color */
    }

    .dyanmic-ui .content .btn {
        margin-top: 1rem;
    }

    .dyanmic-ui .numbered-grid {
        margin-top: 2rem;
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
        /* Blue color */
        color: white;
        font-weight: bold;
        border-radius: 50%;
        margin-right: 1rem;
    }

    .dyanmic-ui .numbered-item p {
        margin: 0;
    }

    .dyanmic-ui .image-placeholder {
        background-color: #1d4ed8;
        width: 100%;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
    }

    .dyanmic-ui .image-placeholder i {
        color: white;
        font-size: 2rem;
    }
</style>

<section class="py-5 dyanmic-ui">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 content">
                <p class="text-uppercase text-muted">
                    {{ BaseHelper::clean($shortcode->section_subtitle ?? 'Lorem ipsum') }}</p>
                <h1>{{ BaseHelper::clean($shortcode->section_title ?? 'Lorem ipsum dolor sit amet<br>consectetur domor at elis') }}
                </h1>
                <p>{{ BaseHelper::clean($shortcode->section_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.') }}
                </p>
                <button
                    class="btn btn-primary">{{ BaseHelper::clean($shortcode->section_button_text ?? 'Action') }}</button>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6">
                <div class="image-placeholder">
                    <img src="{{ BaseHelper::clean($shortcode->section_image ?? '') }}" alt="Image">
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
