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
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->string('user_email');
            $table->string('subject');
            $table->integer('experience');
            $table->string('shortintro');           
            $table->string('detailintro');
            $table->string('basicplantime');
            $table->integer('basicplanprice');  
            $table->string('standardplantime');
            $table->integer('standardplanprice');
            $table->string('premiumplantime');
            $table->integer('premiumplanprice');      
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
        Schema::dropIfExists('profile');
    }
};
