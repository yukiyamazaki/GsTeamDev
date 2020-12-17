<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
                Schema::create("contact", function (Blueprint $table) {
                        
						$table->bigIncrements('id');
						$table->string('user_name',128)->nullable();
						$table->string('user_mail',128);
						$table->string('contact_category',128)->nullable();
						$table->string('contact_content',288);
                        $table->integer('login_user_id')->nullable();
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
                Schema::dropIfExists("contact");
            }
        }
