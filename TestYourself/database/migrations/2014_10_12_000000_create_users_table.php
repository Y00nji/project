<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateабитуриентыTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('абитуриенты', function (Blueprint $table) {
            $table->increments('idАбитуриента');
            $table->string('Фамилия');
            $table->string('Имя');
            $table->string('Отчество')->default(NULL);
            $table->string('email')->unique();
             $table->timestamp('email_verified_at')->nullable();
            $table->string('Пароль');
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
        Schema::dropIfExists('абитуриенты');
    }
}
