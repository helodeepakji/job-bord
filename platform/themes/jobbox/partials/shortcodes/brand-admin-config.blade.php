<div class="mb-3">
    <label class="form-label">{{ __('Image Box 1') }}</label>
    {!! Form::mediaImage('image1', Arr::get($attributes, 'image1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box 2') }}</label>
    {!! Form::mediaImage('image2', Arr::get($attributes, 'image2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box 3') }}</label>
    {!! Form::mediaImage('image3', Arr::get($attributes, 'image3')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image Box 4') }}</label>
    {!! Form::mediaImage('image4', Arr::get($attributes, 'image4')) !!}
</div>