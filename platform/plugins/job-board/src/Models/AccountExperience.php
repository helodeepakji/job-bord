<?php

namespace Botble\JobBoard\Models;

use Carbon\Carbon;
use Botble\Base\Casts\SafeContent;
use Botble\Base\Models\BaseModel;

class AccountExperience extends BaseModel
{
    protected $table = 'jb_account_experiences';

    protected $fillable = [
        'company',
        'account_id',
        'position',
        'description',
        'started_at',
        'ended_at',
        'experience_years',  // Add the new field here
    ];

    protected $casts = [
        'started_at' => 'date',
        'ended_at' => 'date',
        'company' => SafeContent::class,
        'position' => SafeContent::class,
        'description' => SafeContent::class,
        'experience_years' => 'integer',  // If you want to cast to integer
    ];

    // Boot method for calculating experience years before saving the model
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Calculate the years of experience and save to the experience_years field
            $model->experience_years = Carbon::parse($model->started_at)
                ->diffInYears(Carbon::parse($model->ended_at ?? now()));  // Use current date if 'ended_at' is null
        });
    }
}
