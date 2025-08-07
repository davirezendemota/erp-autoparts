<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateTransactions extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
    $table = $this->table('transactions');
    $table->addColumn('item_id','integer', ['null' => false]);
    $table->addColumn('tipo', 'enum', [
        'values' => ['compra', 'venda', 'devolucao'],
        'null' => false
    ]);
    $table->addColumn('data_transacao', 'date', [
        'null' => false
    ]);
    $table->addColumn('quantidade','integer',[
        'null' => false,
        'default' => 1
    ]);
    $table->addColumn('preco_total', 'decimal', [
        'precision' => 10,
        'scale' => 2,
        'null' => false
    ]);     
    $table->addForeignKey('item_id', 'items', 'id', ['delete'=> 'CASCADE']);
    $table->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP']);
    $table->addColumn('modified', 'datetime', ['null' => true]);
    
    $table->create();
    }
}