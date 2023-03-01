<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='contacts_us';
    protected $fillable=[
        'name','email','comment','subject','status','deleted_at','updated_at','created_at'
    ];
}
