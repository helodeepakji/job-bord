<div class="mb-3">
    <label class="form-label">{{ __('Hero Subtitle') }}</label>
    <input type="text" name="hero_subtitle" value="{{ Arr::get($attributes, 'hero_subtitle', __('Lorem ipsum')) }}" class="form-control" placeholder="{{ __('Hero Subtitle') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Title') }}</label>
    <input type="text" name="hero_title" value="{{ Arr::get($attributes, 'hero_title', __('Lorem ipsum dolor sit amet consectetur domor at elis')) }}" class="form-control" placeholder="{{ __('Hero Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Description') }}</label>
    <textarea name="hero_description" class="form-control" placeholder="{{ __('Hero Description') }}">{{ Arr::get($attributes, 'hero_description', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Text Button Box') }}</label>
    <input type="text" name="hero_button_text" value="{{ Arr::get($attributes, 'hero_button_text', __('Action')) }}" class="form-control" placeholder="{{ __('Text Button Box') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Link') }}</label>
    <input type="text" name="button_link" value="{{ Arr::get($attributes, 'button_link', __('Button Link')) }}" class="form-control" placeholder="{{ __('Button Link') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box') }}</label>
    {!! Form::mediaImage('hero_image', Arr::get($attributes, 'hero_image')) !!}
</div>

<!-- Numbered List Section -->
<div class="mb-3">
    <label class="form-label">{{ __('Feature 1 Description') }}</label>
    <textarea name="feature1_description" class="form-control" placeholder="{{ __('Feature 1 Description') }}">{{ Arr::get($attributes, 'feature1_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 2 Description') }}</label>
    <textarea name="feature2_description" class="form-control" placeholder="{{ __('Feature 2 Description') }}">{{ Arr::get($attributes, 'feature2_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 3 Description') }}</label>
    <textarea name="feature3_description" class="form-control" placeholder="{{ __('Feature 3 Description') }}">{{ Arr::get($attributes, 'feature3_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>
