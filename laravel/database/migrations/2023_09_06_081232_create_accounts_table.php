<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('氏名');
            $table->string('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->integer('auth')->default(0)->comment('権限');
            $table->integer('status')->default(0)->comment('状態');
            $table->dateTime('login_date')->nullable()->comment('ログイン日時');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
