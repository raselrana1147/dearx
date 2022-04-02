<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Payment;
use App\Models\User;

class Transaction extends Model
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
