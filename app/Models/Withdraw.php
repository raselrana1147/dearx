<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Payment;
use App\Models\User;

class Withdraw extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function payment()
    {
    	return $this->belongsTo(Payment::class);
    }
}
