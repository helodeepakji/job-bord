<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('account_id'); // Foreign key to jb_accounts table
            $table->string('assessment_id')->unique(); // Unique assessment ID
            $table->string('candidate_id');
            $table->string('status')->default('Pending'); // Status of the assessment
            $table->text('test_link'); // Test link for the assessment
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('account_id')->references('id')->on('jb_accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
