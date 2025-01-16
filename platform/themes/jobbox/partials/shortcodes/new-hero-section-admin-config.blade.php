<div class="mb-3">
    <label class="form-label">{{ __('Hero Title') }}</label>
    <input type="text" name="hero_title" value="{{ Arr::get($attributes, 'hero_title', __('Take quick action that increases your brand\'s regular profit.')) }}" class="form-control" placeholder="{{ __('Hero Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Description') }}</label>
    <textarea name="hero_description" class="form-control" placeholder="{{ __('Hero Description') }}">{{ Arr::get($attributes, 'hero_description', __('If you have ever wondered how to develop your brand, this is the place for you. Take a big step forward in growing your business with this great tool.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Hero Button Text') }}</label>
    <input type="text" name="hero_button_text" value="{{ Arr::get($attributes, 'hero_button_text', __('Try Demo')) }}" class="form-control" placeholder="{{ __('Hero Button Text') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Link') }}</label>
    <input type="text" name="button_link" value="{{ Arr::get($attributes, 'button_link', __('Button Link')) }}" class="form-control" placeholder="{{ __('Button Link') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 1 Title') }}</label>
    <input type="text" name="feature_1_title" value="{{ Arr::get($attributes, 'feature_1_title', __('Spectacular team plan')) }}" class="form-control" placeholder="{{ __('Feature 1 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 1 Description') }}</label>
    <textarea name="feature_1_description" class="form-control" placeholder="{{ __('Feature 1 Description') }}">{{ Arr::get($attributes, 'feature_1_description', __('Fairly assigning daily tasks to your employees')) }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">{{ __('Image Box 1') }}</label>
    {!! Form::mediaImage('image1', Arr::get($attributes, 'image1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 2 Title') }}</label>
    <input type="text" name="feature_2_title" value="{{ Arr::get($attributes, 'feature_2_title', __('Sharable showcase')) }}" class="form-control" placeholder="{{ __('Feature 2 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 2 Description') }}</label>
    <textarea name="feature_2_description" class="form-control" placeholder="{{ __('Feature 2 Description') }}">{{ Arr::get($attributes, 'feature_2_description', __('Team members will be up to date on the project')) }}</textarea>
</div>



<div class="mb-3">
    <label class="form-label">{{ __('Image Box 2') }}</label>
    {!! Form::mediaImage('image2', Arr::get($attributes, 'image2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 3 Title') }}</label>
    <input type="text" name="feature_3_title" value="{{ Arr::get($attributes, 'feature_3_title', __('Generate messages')) }}" class="form-control" placeholder="{{ __('Feature 3 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Feature 3 Description') }}</label>
    <textarea name="feature_3_description" class="form-control" placeholder="{{ __('Feature 3 Description') }}">{{ Arr::get($attributes, 'feature_3_description', __('More interesting writings for your customers')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box 3') }}</label>
    {!! Form::mediaImage('image3', Arr::get($attributes, 'image3')) !!}
</div>


