<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('schemes', function (Blueprint $table) {
                $table->id();
                $table->string('scheme_name');
                $table->text('small_description');
                $table->text('detailed_description');
                $table->text('eligibility');
                $table->text('references');
                $table->unsignedBigInteger('category_id')->nullable();
                $table->timestamps();

                $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schemes');
       
    }
}
