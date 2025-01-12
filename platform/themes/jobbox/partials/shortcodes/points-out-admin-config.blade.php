<div class="mb-3">
    <label class="form-label">{{ __('Heading') }}</label>
    <input type="text" name="feature_heading" value="{{ Arr::get($attributes, 'feature_heading', __('Lorem ipsum dolor sit amet consectetur')) }}" class="form-control" placeholder="{{ __('Heading') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Text') }}</label>
    <textarea name="feature_item_1" class="form-control" placeholder="{{ __('Feature 1 Text') }}">{{ Arr::get($attributes, 'feature_item_1', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Text') }}</label>
    <textarea name="feature_item_2" class="form-control" placeholder="{{ __('Feature 2 Text') }}">{{ Arr::get($attributes, 'feature_item_2', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Text') }}</label>
    <textarea name="feature_item_3" class="form-control" placeholder="{{ __('Feature 3 Text') }}">{{ Arr::get($attributes, 'feature_item_3', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 4 Text') }}</label>
    <textarea name="feature_item_4" class="form-control" placeholder="{{ __('Feature 4 Text') }}">{{ Arr::get($attributes, 'feature_item_4', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('feature_image', Arr::get($attributes, 'feature_image')) !!}
</div>