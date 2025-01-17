<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('jb_invoices', function (Blueprint $table): void {
            $table->string('company_logo')->nullable()->after('company_name');
        });
    }

    public function down(): void
    {
        Schema::table('jb_invoices', function (Blueprint $table): void {
            $table->dropColumn('company_logo');
        });
    }
};
