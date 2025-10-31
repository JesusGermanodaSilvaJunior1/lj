<?php
// database/migrations/xxxx_create_produtos_table.php
public function up()
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->text('descricao');
        $table->decimal('preco', 8, 2);
        $table->string('imagem')->nullable();
        $table->timestamps();
    });
}
