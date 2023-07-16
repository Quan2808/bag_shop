<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_name', 'customer_email', 'customer_phone', 'customer_password', 'remember_token'];
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at'];
}