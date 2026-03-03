<?php
create ('clientes', fuction (blueprint $table) {
    $table -> id();
    $table -> string('nome');
    $table -> string('email');
    $table -> string('telefone');
    $table -> timestamps();

});

Schema::create('products', function (Blueprint $table){
    $table->id();
    $table->string('name');
    $table->decimal('price', 10, 2); 
    $table->integer('stock'); 
    $table->timestamps();
});


Schema::create('orders', function (Blueprint $table) {
    $table->id();
    
    $table->foreignId('client_id')->constrained('clients'); 
    
    $table->decimal('total_value', 10, 2); 
    $table->string('status')->default('pending'); 
    $table->timestamps();
});

?>
