<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * A migration original de criação da tabela "users" continha um erro de
 * copy/paste e criava, em vez disso, uma tabela "pets" (minúscula) sem
 * relação com a tabela "Pet" real do sistema (que vem do mobipet.sql).
 * Como aquela migration já havia rodado em bancos existentes, corrigir
 * apenas o arquivo original não migra os ambientes já criados — por isso
 * esta migration corrige o banco já existente.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pets')) {
            Schema::drop('pets');
        }

        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        // Estado corrigido não precisa ser revertido.
    }
};
