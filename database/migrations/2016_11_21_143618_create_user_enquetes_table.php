<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_enquetes', function (Blueprint $table) {
          $table->increments('id');
          $table->varchar('place_1');
          $table->integer('place_1_kwaliteit_eten')->nullable();
          $table->integer('place_1_prijs_kwaliteit')->nullable();
          $table->integer('place_1_variatie')->nullable();
          $table->integer('place_1_sfeer')->nullable();
          $table->integer('place_1_service')->nullable();
          $table->varchar('place_2');
          $table->integer('place_2_kwaliteit_eten')->nullable();
          $table->integer('place_2_prijs_kwaliteit')->nullable();
          $table->integer('place_2_variatie')->nullable();
          $table->integer('place_2_sfeer')->nullable();
          $table->integer('place_2_service')->nullable();
          $table->varchar('place_3');
          $table->integer('place_3_kwaliteit_eten')->nullable();
          $table->integer('place_3_prijs_kwaliteit')->nullable();
          $table->integer('place_3_variatie')->nullable();
          $table->integer('place_3_sfeer')->nullable();
          $table->integer('place_3_service')->nullable();
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
        Schema::dropIfExists('user_enquetes');
    }
}
