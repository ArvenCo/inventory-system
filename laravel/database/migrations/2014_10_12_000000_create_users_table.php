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
        Schema::create('users', function ($conllections) {
            $conllections->string('name');
            $conllections->string('email')->unique();
            $conllections->timestamp('email_verified_at')->nullable();
            $conllections->string('password');
            $conllections->rememberToken();
            $conllections->timestamps();
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
