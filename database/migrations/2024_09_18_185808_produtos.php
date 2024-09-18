<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // tipo int, auto increment, chave primária
            $table->string('nome');
            $table->text('descricao'); // o tipo TEXT armazena maiores quantidades de texto
            $table->double('preco', 10,2);
            $table->string('slug'); // título para URL
            $table->string('imagem'); // passa o caminho da imagem

            $table->unsignedBigInteger('id_user'); //relação de usuários
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); // config da chave estrangeira de usuário
            // A chave estrangeira "id_user" faz referência ao campo "id" da tabela "users"
            // onDelete & onUpdate: se deletarmos o usuário que cadastrou algum produto, os produtos também serão deletados

            $table->unsignedBigInteger('id_categoria'); //relação da categoria
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps(); // cria duas colunas (created e updated), representa o momento da criação e atualização de um registro
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
