<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
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
        'image',
        'status',
        'account_id',
    ];

    protected $dates = ['birthday']
}
