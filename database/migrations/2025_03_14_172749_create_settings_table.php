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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->default('Pesisir Wedding');
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('address')->default('unknown');
            $table->string('email')->default('example@example.com');
            $table->string('phone')->default('123456789');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
