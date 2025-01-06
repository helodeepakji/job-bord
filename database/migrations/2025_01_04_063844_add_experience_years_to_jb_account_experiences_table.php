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
        Schema::table('jb_account_experiences', function (Blueprint $table) {
            // Add the experience_years column
            $table->integer('experience_years')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jb_account_experiences', function (Blueprint $table) {
            // Drop the experience_years column
            $table->dropColumn('experience_years');
        });
    }
};
