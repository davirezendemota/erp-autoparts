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
    $table->addColumn('type', 'enum', [
        'values' => ['purchase', 'sale', 'return'],
        'null' => false
    ]);
    $table->addColumn('transactions_date', 'date', [
        'null' => false
    ]);
    $table->addColumn('quantity','integer',[
        'null' => false,
        'default' => 1    
    ]);        
    $table->addColumn('total_price', 'decimal', [
        'precision' => 10,
        'scale' => 2,
        'null' => false
    ]);     
    $table->addForeignKey('item_id', 'items', 'id', ['delete'=> 'CASCADE']);

    $table->create();
    }
}