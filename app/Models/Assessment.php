<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Botble\JobBoard\Models\Account;

class Assessment extends Model
{
    use HasFactory;

    // Table associated with the model
    protected $table = 'assessments';

    // Primary key of the table
    protected $primaryKey = 'id';

    protected $fillable = [
        'account_id', // Account associated with the assessment
        'assessment_id', // Unique assessment ID
        'candidate_id', // Unique candidate ID
        'status', // Status of the assessment
        'test_link', // Link to the assessment test
    ];

    // Relationship: Each assessment belongs to an account (User)
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
