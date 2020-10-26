<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use SoftDeletes;

    public $table = 'enquiries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_SELECT = [
        'wip'       => 'Work in Progress',
        'completed' => 'Completed',
    ];

    protected $fillable = [
        'name',
        'email',
        'mobile_number',
        'address',
        'notes',
        'plan',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
