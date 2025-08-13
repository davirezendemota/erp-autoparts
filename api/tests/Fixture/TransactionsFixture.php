<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TransactionsFixture
 */
class TransactionsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'item_id' => 1,
                'tipo' => 'Lorem ipsum dolor sit amet',
                'data_transacao' => '2025-08-08',
                'quantidade' => 1,
                'preco_total' => 1.5,
                'created' => '2025-08-08 23:49:29',
                'modified' => '2025-08-08 23:49:29',
            ],
        ];
        parent::init();
    }
}
