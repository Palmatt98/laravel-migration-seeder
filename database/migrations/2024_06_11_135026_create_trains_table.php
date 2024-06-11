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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Stazione di partenza');
            $table->string('Stazione di arrivo');
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->smallInteger('Codice Treno');
            $table->tinyInteger('Numero Carrozze');
            $table->boolean('In orario')->default(true);
            $table->boolean('Cancellato')->default(false);



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
