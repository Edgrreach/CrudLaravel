<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 30);
            $table->string('marca', 40);
            $table->string('serial', 30);
            $table->string('modelo', 50);
            $table->string('estatus', 100);
            $table->bigInteger('empleado_id')->nullable();;
            $table->foreign('empleado_id')->references('id')->on('empleados')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->softDeletes();
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
    }
};
