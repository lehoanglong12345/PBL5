<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'gender',
        'birthday',
        'email',
        'CMND',
        'address',
        'phone',
        'account_bank',
        'name_bank',
        'start_time',
        'start_end',
        'image',
        'status',
        'account_id',
        'position_id',
    ];
}
