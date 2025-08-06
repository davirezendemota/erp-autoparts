<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateItems extends BaseMigration
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
        $table = $this->table('items');
        $table->addColumn('nome', 'string', [
            'limit' => 255,
            'null' => false
        ]);

        $table->addColumn('preço', 'decimal', [
            'precision' => 10,
            'scale' => 2,
            'null' => false,
        ]);
        
        $table->addColumn('tipo', 'string', [
            'limit' => 100,
            'null' => false,
        ]);    
        $table->addColumn('quantidade', 'integer', [
            'default' => 0,
            'null' => false,
        ]);
        $table->addColumn('descrição', 'text', [
            'limit' => 300,
            'null' => true,
        ]);
            
        $table->create();
    }
}
