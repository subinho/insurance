<?php

use App\Models\User;
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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignIdFor(User::class);
            $table->string('address');
            $table->string('city');
            $table->string('zip');
            $table->string('phone_number');
            $table->string('email');
            $table->string('identification_number');
            $table->boolean('has_spouse')->default(false);
            $table->enum('policy_type', allowed: ['Life', 'Health']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
