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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameShort');
            $table->string('description');
            $table->string('logo');
            $table->string('country')->default('Россия');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('house');
            $table->string('addressAdditionals');
            $table->string('phone');
            $table->string('phoneAdditional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
