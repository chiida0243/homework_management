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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('homework_name',50); //課題名
            $table->string('body', 200);
            $table->foreignId('category_id')->constrained();
            $table->string('image_url');  //追加
            $table->foreignId('user_id')->constrained(); //投稿者(先生の名前)
            $table->date('deadline'); //期限日
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
