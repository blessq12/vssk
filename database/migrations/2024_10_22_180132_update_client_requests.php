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
        Schema::table('client_requests', function (Blueprint $table) {
            $table->dropColumn('carpet_type');
            $table->dropColumn('carpet_size');
            $table->dropColumn('carpet_height');
            $table->dropColumn('carpet_additional');
            $table->dropColumn('furniture_type');
            $table->dropColumn('furniture_size');
            $table->dropColumn('count_of_seats');
            $table->dropColumn('count_of_items');
            $table->dropColumn('mattress_size');
            $table->dropColumn('mattress_height');
            $table->dropColumn('mattress_additional');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_requests', function (Blueprint $table) {
            //
        });
    }
};
