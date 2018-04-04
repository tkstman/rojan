<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prod_images', function (Blueprint $table) {
            $table->integer('prod_id');
            $table->integer('image_id');
            $table->integer('priority');
            $table->integer('audit_user');
            $table->primary(['prod_id','image_id']);
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
        //
        Schema::dropIfExists('prod_images');
    }
}
