<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('winebox', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('year')->nullable();
            $table->text('description')->nullable();
            $table->text('food')->nullable();
            $table->string('Denom')->nullable(); // Denominazione
            $table->string('grapes')->nullable(); // Uve
            $table->decimal('Alcool', 5, 2)->nullable(); // Alcool in percentuale
            $table->decimal('Cl', 5, 2)->nullable(); // Formato in litri
        });
    }

    public function down(): void
    {
        Schema::table('winebox', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('year');
            $table->dropColumn('description');
            $table->dropColumn('food');
            $table->dropColumn('Denom'); // Denominazione
            $table->dropColumn('grapes'); // Uve
            $table->dropColumn('Alcool'); // Alcool in percentuale
            $table->dropColumn('Cl'); // Formato in litri
        });
    }
};
