<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="hero_title" value="{{ Arr::get($attributes, 'hero_title', __('Quick problem-solving contact')) }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Text Button Box') }}</label>
    <input type="text" name="hero_button_text" value="{{ Arr::get($attributes, 'hero_button_text', __('Text button box')) }}" class="form-control" placeholder="{{ __('Text button box') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Link') }}</label>
    <input type="text" name="button_link" value="{{ Arr::get($attributes, 'button_link', __('Button Link')) }}" class="form-control" placeholder="{{ __('Button Link') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Description') }}</label>
    <textarea name="hero_description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'hero_description', __('Description')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box') }}</label>
    {!! Form::mediaImage('hero_image', Arr::get($attributes, 'hero_image')) !!}
</div>