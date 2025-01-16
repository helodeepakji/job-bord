<div class="mb-3">
    <label class="form-label">{{ __('Icon Grid Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title', __('Icon Grid')) }}" class="form-control" placeholder="{{ __('Icon Grid Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Title') }}</label>
    <input type="text" name="item1_title" value="{{ Arr::get($attributes, 'item1_title', __('Bootstrap')) }}" class="form-control" placeholder="{{ __('Item 1 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <input type="text" name="select_description" value="{{ Arr::get($attributes, 'select_description', __('Quick problem-solving contact')) }}" class="form-control" placeholder="{{ __('Description') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Select Label') }}</label>
    <input type="text" name="select_label" value="{{ Arr::get($attributes, 'select_label', __('Quick problem-solving contact')) }}" class="form-control" placeholder="{{ __('Select Label') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Description') }}</label>
    <textarea name="item1_description" class="form-control" placeholder="{{ __('Item 1 Description') }}">{{ Arr::get($attributes, 'item1_description', __('Description for item 1')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Image') }}</label>
    {!! Form::mediaImage('item1_image', Arr::get($attributes, 'item1_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Title') }}</label>
    <input type="text" name="item2_title" value="{{ Arr::get($attributes, 'item2_title', __('CPU')) }}" class="form-control" placeholder="{{ __('Item 2 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Description') }}</label>
    <textarea name="item2_description" class="form-control" placeholder="{{ __('Item 2 Description') }}">{{ Arr::get($attributes, 'item2_description', __('Description for item 2')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Image') }}</label>
    {!! Form::mediaImage('item2_image', Arr::get($attributes, 'item2_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Title') }}</label>
    <input type="text" name="item3_title" value="{{ Arr::get($attributes, 'item3_title', __('Calendar')) }}" class="form-control" placeholder="{{ __('Item 3 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Description') }}</label>
    <textarea name="item3_description" class="form-control" placeholder="{{ __('Item 3 Description') }}">{{ Arr::get($attributes, 'item3_description', __('Description for item 3')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Image') }}</label>
    {!! Form::mediaImage('item3_image', Arr::get($attributes, 'item3_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 4 Title') }}</label>
    <input type="text" name="item4_title" value="{{ Arr::get($attributes, 'item4_title', __('Home')) }}" class="form-control" placeholder="{{ __('Item 4 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 4 Description') }}</label>
    <textarea name="item4_description" class="form-control" placeholder="{{ __('Item 4 Description') }}">{{ Arr::get($attributes, 'item4_description', __('Description for item 4')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 4 Image') }}</label>
    {!! Form::mediaImage('item4_image', Arr::get($attributes, 'item4_image')) !!}
</div>