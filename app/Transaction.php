<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'Transactions';

    protected $fillable = ['id', 'verified', 'paymentMethod'];
}
