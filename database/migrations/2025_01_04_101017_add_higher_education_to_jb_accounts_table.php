<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('jb_accounts', function (Blueprint $table) {
            $table->string('higher_education')->nullable()->after('bio');
        });
    }
    
    public function down()
    {
        Schema::table('jb_accounts', function (Blueprint $table) {
            $table->dropColumn('higher_education');
        });
    }
    
};
