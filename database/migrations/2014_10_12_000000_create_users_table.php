<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->float('balance',11,2)->nullable();
            $table->float('today_earn',11,2)->nullable();
            $table->integer('coin')->default(0);
            $table->string('user_code')->unique();
            $table->string('referal_code')->nullable();
            $table->string('avatar')->nullable();
            $table->tinyInteger('is_active')->default(1)->comment("0=active,1=inactive");
            $table->string('mobile_otp')->nullable();
            $table->string('password'); 
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
