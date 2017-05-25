<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('stl_file_path');
            $table->integer('quantity')->unsigned()->default(1);
            $table->string('production_method')->default('FDM');
            $table->string('meterial')->default('ABS');
            $table->string('color')->default('GRI');
            $table->float('infill')->default(0.15);
            $table->float('layer_height')->default(0.2);
            $table->float('volume')->nullable();
            $table->string('base_price')->nullable();
            
            $table->string('price')->nullable();
            
            $table->string('user_id');
            $table->string('img_path')->nullable();
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
        Schema::dropIfExists('print_objects');
    }
}
