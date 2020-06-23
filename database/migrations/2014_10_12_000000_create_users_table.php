<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('foto');
            $table->string('name');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('kode');
            $table->string('ktm');
            $table->string('status');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('active')->default(false);
            $table->longText('token_register');
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
