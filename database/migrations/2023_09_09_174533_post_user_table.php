<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('post_user', function (Blueprint $table) 
        {
        $table->foreignId('post_id')->constrained('posts');     
        $table->foreignId('user_id')->constrained('users');
        
        });
    }
};
