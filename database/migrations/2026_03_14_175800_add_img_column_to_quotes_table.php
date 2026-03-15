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
        Schema::table('quotes', function (Blueprint $table) {
            // Con nullable autorizzo il valore NULL per il campo
            // Con after('nomeColonna) indica il posizionamento DOPO nomeColonna
            $table->string('img')->nullable()->after('autore');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('quotes', function (Blueprint $table) {
            // Cancella la colonna inserita nel parametro
            $table->dropColumn('img');
        });
    }
};
