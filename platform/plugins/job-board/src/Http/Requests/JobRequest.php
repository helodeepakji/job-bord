<?php

namespace Botble\JobBoard\Http\Requests;

use Botble\JobBoard\Enums\JobStatusEnum;
use Botble\JobBoard\Enums\ModerationStatusEnum;
use Botble\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class JobRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:120'],
            'description' => ['nullable', 'string', 'max:400'],
            'content' => ['nullable', 'string', 'max:100000'],
            'status' => Rule::in(JobStatusEnum::values()),
            'moderation_status' => Rule::in(ModerationStatusEnum::values()),
            'latitude' => ['max:20', 'nullable', 'regex:/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/'],
            'longitude' => [
                'max:20',
                'nullable',
                'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/',
            ],
            'zip_code' => ['nullable', 'string', 'max:20'],
            'custom_fields.*.name' => ['required', 'string', 'max:255'],
            'custom_fields.*.value' => ['required', 'string', 'max:255'],
            'number_of_positions' => ['required', 'integer', 'max:10000'],
            'apply_url' => ['nullable', 'url', 'max:191'],
            'unique_id' => 'nullable|string|unique:jb_jobs,unique_id,' . $this->route('job.id'),
        ];
    }
}
