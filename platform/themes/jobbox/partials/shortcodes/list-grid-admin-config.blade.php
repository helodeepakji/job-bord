<div class="mb-3">
    <label class="form-label">{{ __('Icon Grid Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title', __('Icon Grid')) }}" class="form-control" placeholder="{{ __('Icon Grid Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Title') }}</label>
    <input type="text" name="item1_title" value="{{ Arr::get($attributes, 'item1_title', __('Bootstrap')) }}" class="form-control" placeholder="{{ __('Item 1 Title') }}">
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

<div class="mb-3">
    <label class="form-label">{{ __('Item 5 Title') }}</label>
    <input type="text" name="item5_title" value="{{ Arr::get($attributes, 'item5_title', __('Speedometer')) }}" class="form-control" placeholder="{{ __('Item 5 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 5 Description') }}</label>
    <textarea name="item5_description" class="form-control" placeholder="{{ __('Item 5 Description') }}">{{ Arr::get($attributes, 'item5_description', __('Description for item 5')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 5 Image') }}</label>
    {!! Form::mediaImage('item5_image', Arr::get($attributes, 'item5_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 6 Title') }}</label>
    <input type="text" name="item6_title" value="{{ Arr::get($attributes, 'item6_title', __('Toggles')) }}" class="form-control" placeholder="{{ __('Item 6 Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 6 Description') }}</label>
    <textarea name="item6_description" class="form-control" placeholder="{{ __('Item 6 Description') }}">{{ Arr::get($attributes, 'item6_description', __('Description for item 6')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 6 Image') }}</label>
    {!! Form::mediaImage('item6_image', Arr::get($attributes, 'item6_image')) !!}
</div>
