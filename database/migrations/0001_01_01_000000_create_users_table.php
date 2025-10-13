<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        // Создаём администратора с помощью DB::table
        $adminEmail = env('ADMIN_EMAIL', 'admin@example.com');
        if (!DB::table('users')->where('email', $adminEmail)->exists()) {
            DB::table('users')->insert([
                'name' => env('ADMIN_NAME', 'Admin'),
                'email' => $adminEmail,
                'password' => Hash::make(env('ADMIN_PASSWORD', 'defaultAdminPassword123')),
                'is_admin' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        // Удаляем администратора
        $adminEmail = env('ADMIN_EMAIL', 'admin@example.com');
        DB::table('users')->where('email', $adminEmail)->delete();

        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};