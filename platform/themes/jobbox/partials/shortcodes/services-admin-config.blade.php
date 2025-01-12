<div class="mb-3">
    <label class="form-label">{{ __('Hero Subtitle') }}</label>
    <input type="text" name="hero_subtitle" value="{{ Arr::get($attributes, 'hero_subtitle', __('Hero Subtitle')) }}" class="form-control" placeholder="{{ __('Hero Subtitle') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Title') }}</label>
    <input type="text" name="hero_title" value="{{ Arr::get($attributes, 'hero_title', __('Hero Title')) }}" class="form-control" placeholder="{{ __('Hero Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Button Text') }}</label>
    <input type="text" name="hero_button_text" value="{{ Arr::get($attributes, 'hero_button_text', __('Try for Free')) }}" class="form-control" placeholder="{{ __('Hero Button Text') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 1 Title') }}</label>
    <input type="text" name="feature1_title" value="{{ Arr::get($attributes, 'feature1_title', __('Quick review')) }}" class="form-control" placeholder="{{ __('Feature 1 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 1 Description') }}</label>
    <input type="text" name="feature1_description" value="{{ Arr::get($attributes, 'feature1_description', __('We make sure you get feedback the same day.')) }}" class="form-control" placeholder="{{ __('Feature 1 Description') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 2 Title') }}</label>
    <input type="text" name="feature2_title" value="{{ Arr::get($attributes, 'feature2_title', __('Easy changes')) }}" class="form-control" placeholder="{{ __('Feature 2 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 2 Description') }}</label>
    <input type="text" name="feature2_description" value="{{ Arr::get($attributes, 'feature2_description', __('Options settings for customers convenience.')) }}" class="form-control" placeholder="{{ __('Feature 2 Description') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 3 Title') }}</label>
    <input type="text" name="feature3_title" value="{{ Arr::get($attributes, 'feature3_title', __('Place storage')) }}" class="form-control" placeholder="{{ __('Feature 3 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 3 Description') }}</label>
    <input type="text" name="feature3_description" value="{{ Arr::get($attributes, 'feature3_description', __('Store projects in easily accessible catalogs.')) }}" class="form-control" placeholder="{{ __('Feature 3 Description') }}">
</div>