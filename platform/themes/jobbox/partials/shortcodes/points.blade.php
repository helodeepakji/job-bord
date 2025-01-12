<style>
    .deep-dynamic-ui .content h1 {
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .deep-dynamic-ui .content p {
        color: #6c757d; /* Bootstrap muted text color */
    }
    .deep-dynamic-ui .content .btn {
        margin-top: 1rem;
    }
    .deep-dynamic-ui .numbered-list {
        background-color: #f9fcfc; /* Slightly lighter background */
        padding: 1.5rem;
        border-radius: 8px;
    }
    .deep-dynamic-ui .numbered-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
    }
    .deep-dynamic-ui .number-circle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background-color: #1d4ed8; /* Blue color */
        color: white;
        font-weight: bold;
        border-radius: 50%;
        margin-right: 1rem;
    }
    .deep-dynamic-ui .numbered-item:last-child {
        margin-bottom: 0;
    }
</style>

<!-- Two-Column Layout -->
<section class="py-5 deep-dynamic-ui">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-lg-6 content">
                <p class="text-uppercase text-muted">{{ BaseHelper::clean($shortcode->hero_subtitle ?? 'Lorem ipsum') }}</p>
                <h1>{{ BaseHelper::clean($shortcode->hero_title ?? 'Lorem ipsum dolor sit amet<br>consectetur domor at elis') }}</h1>
                <p>{{ BaseHelper::clean($shortcode->hero_description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.') }}</p>
                <button class="btn btn-primary">{{ BaseHelper::clean($shortcode->hero_button_text ?? 'Action') }}</button>
            </div>

            <!-- Right Column: Numbered List -->
            <div class="col-lg-6">
                <div class="numbered-list">
                    <!-- List Item 1 -->
                    <div class="numbered-item">
                        <div class="number-circle">1</div>
                        <p>{{ BaseHelper::clean($shortcode->feature1_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                    <!-- List Item 2 -->
                    <div class="numbered-item">
                        <div class="number-circle">2</div>
                        <p>{{ BaseHelper::clean($shortcode->feature2_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                    <!-- List Item 3 -->
                    <div class="numbered-item">
                        <div class="number-circle">3</div>
                        <p>{{ BaseHelper::clean($shortcode->feature3_description ?? 'Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
