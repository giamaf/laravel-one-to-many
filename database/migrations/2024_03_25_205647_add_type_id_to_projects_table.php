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
        Schema::table('projects', function (Blueprint $table) {
            // Creo la colonna
            $table->unsignedBigInteger('type_id')->nullable()->after('id');

            // Creo la chiave esterna
            $table->foreign('type_id')->references('id')->on('types')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Cancello la relazione
            $table->dropForeign('projects_type_id_foreign');

            // Cancello la colonna
            $table->dropColumn('type_id');
        });
    }
};
