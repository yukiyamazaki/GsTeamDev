<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
                Schema::create("like_table", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->integer('like_user_id');
						$table->integer('like_document_ld');

                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("like_table");
            }
        }

