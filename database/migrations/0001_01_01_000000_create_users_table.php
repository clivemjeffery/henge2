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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name_first');
            $table->string('name_last');
            $table->string('name_pref')->nullable();
            $table->string('names_middle')->nullable();
            $table->string('gender')->nullable();

            $table->datetime('dob')->nullable();

            $table->string('user_type')->default('pupil');
            $table->integer('adno')->nullable();
            $table->string('upn')->unique()->nullable(); // should allow mutiple nulls

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(); // null for pupil and ms graph logins
            $table->string('child_password')->nullable(); // null for adults
            $table->rememberToken();

            $table->string('reg')->nullable(); // school class or 'registration group' from SIMS
            $table->string('house')->nullable(); // simplifying by storing as string not object
            $table->string('year')->nullable(); // switching to string from henge-egg's int
    
            $table->timestamps();

            $table->index('adno');
            $table->index('name_last');
            $table->index('name_first');
        });

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

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
