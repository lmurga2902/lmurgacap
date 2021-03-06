<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
       Schema::create('articles', function (Blueprint $table) {
           $table->bigIncrements('id');

           $table->string('name', 50);
           $table->string('description', 200)->nullable();
           $table->string('slug', 60);
           
           $table->bigInteger('create_user');
           $table->bigInteger('update_user');

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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
