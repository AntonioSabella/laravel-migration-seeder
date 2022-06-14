<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacations', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 50);
            $table->string('img');
            $table->string('package_type', 50)->nullable();
            $table->boolean('is_available')->default(1);
            $table->date('start_vacation')->nullable();
            $table->date('end_vacation')->nullable();
            $table->string('transport_type', 15)->nullable();
            $table->string('transport_company', 100)->nullable();
            $table->decimal('price', 6, 2 )->nullable();
            $table->string('hotel', 100)->nullable();
            $table->tinyInteger('rooms')->unsigned()->nullable();
            $table->tinyInteger('customers')->unsigned()->nullable();
            $table->text('vacation_notes')->nullable();
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
        Schema::dropIfExists('vacations');
    }
}
