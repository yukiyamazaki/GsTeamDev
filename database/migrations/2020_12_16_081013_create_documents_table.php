<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("document_table", function (Blueprint $table) {

                $table->bigIncrements('id');
                $table->string('title',128)->nullable();
                $table->string('discription')->nullable();
                $table->string('file_type',128)->nullable();
                $table->string('document_name',128)->nullable();
                $table->string('school_categroy',128)->nullable();
                $table->string('subject',128)->nullable();
                $table->string('grade',128)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("document_table");
    }
}