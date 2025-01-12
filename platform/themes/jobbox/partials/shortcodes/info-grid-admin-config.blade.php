<div class="mb-3">
    <label class="form-label">{{ __('Text Button Box') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'text_button_box') }}" class="form-control" placeholder="{{ __('Text button box') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Title') }}</label>
    <input type="text" name="item1_title" value="{{ Arr::get($attributes, 'item1_title', __('Quick problem-solving contact')) }}" class="form-control" placeholder="{{ __('Item 1 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Description') }}</label>
    <textarea name="item1_description" class="form-control" placeholder="{{ __('Item 1 Description') }}">{{ Arr::get($attributes, 'item1_description', __('Description for item 1')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Title') }}</label>
    <input type="text" name="item2_title" value="{{ Arr::get($attributes, 'item2_title', __('Making changes simple and easy')) }}" class="form-control" placeholder="{{ __('Item 2 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Description') }}</label>
    <textarea name="item2_description" class="form-control" placeholder="{{ __('Item 2 Description') }}">{{ Arr::get($attributes, 'item2_description', __('Description for item 2')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Title') }}</label>
    <input type="text" name="item3_title" value="{{ Arr::get($attributes, 'item3_title', __('Exchangeable at any time')) }}" class="form-control" placeholder="{{ __('Item 3 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Description') }}</label>
    <textarea name="item3_description" class="form-control" placeholder="{{ __('Item 3 Description') }}">{{ Arr::get($attributes, 'item3_description', __('Description for item 3')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box') }}</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>

