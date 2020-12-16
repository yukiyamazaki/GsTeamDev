<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
                Schema::create("post_table", function (Blueprint $table) {

						$table->bigIncrements('id');
						$table->integer('post_user_id');
						$table->integer('document_id');

                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("post_table");
            }
        }
    
