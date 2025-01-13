<div class="mb-3">
    <label class="form-label">{{ __('Section Label') }}</label>
    <input type="text" name="pricing_label" value="{{ Arr::get($attributes, 'pricing_label', __('Lorem ipsum')) }}"
        class="form-control" placeholder="{{ __('Section Label') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Section Title') }}</label>
    <input type="text" name="pricing_title"
        value="{{ Arr::get($attributes, 'pricing_title', __('Lorem ipsum dolor sit amet consecutar domor at elis')) }}"
        class="form-control" placeholder="{{ __('Section Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Section Description') }}</label>
    <textarea name="pricing_description" class="form-control" placeholder="{{ __('Section Description') }}">{{ Arr::get($attributes, 'pricing_description', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Pricing Plans') }}</label>
    <div id="pricing-plans-container">

        <!-- Plan 1: Starter -->
        <div class="pricing-plan mb-3 border p-3">
            <input type="text" name="plan_1"
                value="{{ Arr::get($attributes, 'plan_1', __('Starter')) }}" class="form-control mb-2"
                placeholder="{{ __('Plan Type (e.g., Starter)') }}">
            <input type="text" name="plan_1_price"
                value="{{ Arr::get($attributes, 'plan_1_price', __('39.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Monthly Price') }}">
            <input type="text" name="plan_1_price_year"
                value="{{ Arr::get($attributes, 'plan_1_price_year', __('349.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Yearly Price') }}">
            <textarea name="plan_1_features" class="form-control mb-2"
                placeholder="{{ __('Plan Features (one per line)') }}">{{ Arr::get($attributes, 'plan_1_features', __('Plan Features')) }}</textarea>
        </div>

        <!-- Plan 2: Pro -->
        <div class="pricing-plan mb-3 border p-3">
            <input type="text" name="plan_2"
                value="{{ Arr::get($attributes, 'plan_2', __('Pro')) }}" class="form-control mb-2"
                placeholder="{{ __('Plan Type (e.g., Pro)') }}">
            <input type="text" name="plan_2_price"
                value="{{ Arr::get($attributes, 'plan_2_price', __('49.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Monthly Price') }}">
            <input type="text" name="plan_2_price_year"
                value="{{ Arr::get($attributes, 'plan_2_price_year', __('469.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Yearly Price') }}">
            <textarea name="plan_2_features" class="form-control mb-2"
                placeholder="{{ __('Plan Features (one per line)') }}">{{ Arr::get($attributes, 'plan_2_features', __('Plan Features')) }}</textarea>
        </div>

        <!-- Plan 3: Premium -->
        <div class="pricing-plan mb-3 border p-3">
            <input type="text" name="plan_3"
                value="{{ Arr::get($attributes, 'plan_3', __('Premium')) }}" class="form-control mb-2"
                placeholder="{{ __('Plan Type (e.g., Premium)') }}">
            <input type="text" name="plan_3_price"
                value="{{ Arr::get($attributes, 'plan_3_price', __('49.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Monthly Price') }}">
            <input type="text" name="plan_3_price_year"
                value="{{ Arr::get($attributes, 'plan_3_price_year', __('469.99')) }}"
                class="form-control mb-2" placeholder="{{ __('Yearly Price') }}">
            <textarea name="plan_3_features" class="form-control mb-2"
                placeholder="{{ __('Plan Features (one per line)') }}">{{ Arr::get($attributes, 'plan_3_features', __('Plan Features')) }}</textarea>
        </div>

    </div>
</div>
