<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ordemservicos', function (Blueprint $table) {
            $table->id();
            $table->date('data_abertura');
            $table->date('data_previsao');
            $table->date('data_entrega');
            $table->unsignedBigInteger('statu_id');
            $table->foreign('statu_id')->references('id')->on('status')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('tipo_atendimento_id');
            $table->foreign('tipo_atendimento_id')->references('id')->on('tipoatendimentos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('placa');
            $table->string('veiculo');
            $table->string('ano');
            $table->string('modelo');
            $table->string('quilometragem');
            $table->unsignedBigInteger('funcionario_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios')->onDelete('cascade')->onUpdate('cascade');
            $table->string('numero_chassi');
            $table->string('cor');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cpf');
            $table->string('insc_estadual');
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordemservicos');
    }
};
