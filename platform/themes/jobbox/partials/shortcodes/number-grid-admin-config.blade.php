<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input type="text" name="section_subtitle" value="{{ Arr::get($attributes, 'section_subtitle', __('Lorem ipsum')) }}" class="form-control" placeholder="{{ __('Subtitle') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="section_title" value="{{ Arr::get($attributes, 'section_title', __('Lorem ipsum dolor sit amet<br>consectetur domor at elis')) }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Text Button Box') }}</label>
    <input type="text" name="section_button_text" value="{{ Arr::get($attributes, 'section_button_text', __('Action')) }}" class="form-control" placeholder="{{ __('Text Button Box') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <textarea name="section_description" class="form-control" placeholder="{{ __('Description') }}">{{ Arr::get($attributes, 'section_description', __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque massa nibh, pulvinar vitae aliquet nec, accumsan aliquet orci.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('section_image', Arr::get($attributes, 'section_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 1 Description') }}</label>
    <textarea name="item1_description" class="form-control" placeholder="{{ __('Item 1 Description') }}">{{ Arr::get($attributes, 'item1_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 2 Description') }}</label>
    <textarea name="item2_description" class="form-control" placeholder="{{ __('Item 2 Description') }}">{{ Arr::get($attributes, 'item2_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 3 Description') }}</label>
    <textarea name="item3_description" class="form-control" placeholder="{{ __('Item 3 Description') }}">{{ Arr::get($attributes, 'item3_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 4 Description') }}</label>
    <textarea name="item4_description" class="form-control" placeholder="{{ __('Item 4 Description') }}">{{ Arr::get($attributes, 'item4_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 5 Description') }}</label>
    <textarea name="item5_description" class="form-control" placeholder="{{ __('Item 5 Description') }}">{{ Arr::get($attributes, 'item5_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Item 6 Description') }}</label>
    <textarea name="item6_description" class="form-control" placeholder="{{ __('Item 6 Description') }}">{{ Arr::get($attributes, 'item6_description', __('Etiam pellentesque non nibh non pulvinar. Mauris posuere, tellus sit amet tempus vestibulum.')) }}</textarea>
</div>