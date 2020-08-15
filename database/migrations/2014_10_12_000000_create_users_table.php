<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname')->comment("昵称")->default("");
            $table->string('email')->comment("邮箱")->default("")->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number')->comment("手机号")->default("")->unique();
            $table->timestamp('phone_number_at')->nullable();
            $table->string('password')->comment("密码");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }
}
