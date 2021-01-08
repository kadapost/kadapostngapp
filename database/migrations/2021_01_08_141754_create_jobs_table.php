<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('user_email');
            $table->string('title');
            $table->string('type');
            $table->string('category');
            $table->string('location')->nullable();
            $table->text('tags')->nullable();
            $table->text('description');
            $table->string('application_email')->nullable();
            $table->string('application_url')->nullable();
            $table->string('closing_date')->nullable();
            $table->string('company_name');
            $table->string('company_website')->nullable();
            $table->string('company_tagline')->nullable();
            $table->string('company_video')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('company_logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
