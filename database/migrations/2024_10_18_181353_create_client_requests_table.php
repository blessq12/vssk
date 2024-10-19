<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Company;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Company::class);
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('message')->nullable();
            $table->string('status')->default('new')->nullable();
            $table->string('type')->nullable(); // [carpet,furniture,mattress]

            // Carpets
            $table->string('carpet_type')->nullable(); // [ковёр/ ковролин/ ковровое покрытие / шегги / безворсовый ковёр]
            $table->string('carpet_size')->nullable(); // [10х15/ 20х30/ 30х40/ 40х50/ 50х60/ 60х70/ 70х80/ 80х90/ 90х100/ 100х120/ 120х150/ 150х180/ 180х200/ 200х250/ 250х300]
            $table->string('carpet_height')->nullable(); // [низкий/ средний/ высокий] ворс
            $table->string('delivery_address')->nullable(); // [улица/ дом/ корпус/ этаж/ подъезд/ квартира]
            $table->json('carpet_additional')->nullable(); // [дополнительные загрязнения/ ковёр с плесенью/ ковёр с плесенью и грибком/ ковёр с плесенью и грибком и плесенью]

            // Furniture [диван/ кресло / стул]
            $table->string('furniture_type')->nullable(); // [диван/ кресло / стул]
            $table->string('furniture_size')->nullable(); // [1-местный/ 2-местный/ 3-местный] [ малый / средний / большой ]
            $table->string('count_of_seats')->nullable(); // [1/2/3] if furniture is a sofa
            $table->string('count_of_items')->nullable(); // [1/2/3] if furniture is a chair

            // Mattress
            $table->string('mattress_size')->nullable(); // [90х190/ 120х200]
            $table->string('mattress_height')->nullable(); // [10/15/20]    
            $table->string('mattress_additional')->nullable(); // [матрас ортопедический/ детский/...]

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_requests');
    }
};
