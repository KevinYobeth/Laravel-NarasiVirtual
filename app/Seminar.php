<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $table = 'seminars';

    protected $fillable = ['userID', 'seminarID', 'transactionID'];
}