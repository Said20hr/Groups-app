<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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

            //basic data
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('role_id')->default(3);
            $table->rememberToken();
            $table->string('profile_photo_path', 2048)->nullable();

            //login data
            $table->string('provider_id')->nullable();
            $table->timestamp('last_seen')->nullable();
            $table->boolean('active')->default(1);
            $table->text('raison_deactivated')->nullable();

            //account data
            $table->text('about_me')->nullable();
            $table->integer('reputation')->default(0);
            $table->boolean('published')->default(true);
            $table->integer('followers')->default(0);
            $table->integer('following')->default(0);
            $table->string('tradingViewId')->nullable();

            //location data
            $table->text('company')->nullable();
            $table->text('location')->nullable();
            $table->text('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();

            //social data
            $table->string('twitter')->nullable();
            $table->string('linkedIn')->nullable();
            $table->string('telegram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('website')->nullable();
            $table->string('youtube_chanel')->nullable();
            $table->string('youtube_username')->nullable();


            $table->foreignId('current_team_id')->nullable();
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
};
