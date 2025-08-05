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
        $table->addColumn('item_id','integer', ['null' => false])
            ->addColumn('type', 'enum', [
                'values' => ['purchase', 'sale', 'return'],
                'null' => false
            ])
            // 7) Define que 'item_id' é uma chave estrangeira para 'items.id' e, se o item for apagado, apaga também as transações relacionadas
            ->addForeignKey('item_id', 'items', 'id', ['delete'=> 'CASCADE'])
            // 8) Executa a criação da tabela
            ->create();
    }
}