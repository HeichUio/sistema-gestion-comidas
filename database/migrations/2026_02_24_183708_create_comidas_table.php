<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tb_comidas', function (Blueprint $table) {
            $table->id('id_comida');
            $table->string('nombre_comida', 100);
            $table->decimal('costo', 8, 2);
            $table->text('detalle_comida');
            $table->unsignedBigInteger('id_tipo_comida');
            $table->timestamps();

            $table->foreign('id_tipo_comida')
                ->references('id_tipo_comida')
                ->on('tb_tipo_comidas')
                ->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('comidas');
    }
};
