<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'telephone',
        'email',
        'bank_account_number',
        'ceb_bill_image_path',
        'id_image_path',
        'bank_book_image_path',
    ];
}