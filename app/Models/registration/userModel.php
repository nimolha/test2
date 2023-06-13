<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    
    use HasFactory;
    public $timestamps=false;
    protected $table = 't_user_master';
    protected $fillable = [
        'Full_name',
        'contact_no',
        'email',
        'password',
        'role_id',
        'created_by',
        'created_at'
    ];
}

