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
            $table->string('name')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('mobile')->unique();
            $table->integer('otp')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('is_active')->default(1)->comment('1=active,0=inactive');
            $table->string('image')->nullable();
            $table->tinyInteger('is_account_created')->comment('0=account not created,1=account created')->default(0);
            $table->tinyInteger('os')->nullable()->comment('1=ios,2=android');
            $table->longText('fcm_token')->nullable();
            $table->longText('voip_token')->nullable();
            $table->string('referred_by')->nullable();
            $table->softDeletes();
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
