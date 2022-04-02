<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Admin\Payment;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function payment()
    {
    	return $this->belongsTo(Payment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
