create ('clientes', fuction (blueprint $table){
    $table -> id();
    $table -> string('nome');
    $table -> string('email');
    $table -> string('telefone');
    $table -> timestamps();

});

Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('name'); // Nome do produto
    $table->decimal('price', 10, 2); // Preço (ex: 1500.50)
    $table->integer('stock'); // Quantidade em estoque
    $table->timestamps();
});


Schema::create('orders', function (Blueprint $table) {
    $table->id();
    // Relacionamento: Este pedido PERTENCE a um Cliente
    $table->foreignId('client_id')->constrained('clients'); 
    
    $table->decimal('total_value', 10, 2); // Valor total da compra
    $table->string('status')->default('pending'); // Status: pendente, pago, enviado...
    $table->timestamps();
});
