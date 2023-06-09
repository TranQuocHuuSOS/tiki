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
        if (!Schema::hasTable('Producttiki')) {
            Schema::create('Producttiki', function ($table) {
            $table->increments('Productkt_id');
            $table->string('Name');
            $table->text('Images');
            $table->integer('Price');
            $table->interger('Promotion');
            $table->text('Description');
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
