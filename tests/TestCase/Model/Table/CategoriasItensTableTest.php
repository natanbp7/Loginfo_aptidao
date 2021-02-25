<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasItensTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasItensTable Test Case
 */
class CategoriasItensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasItensTable
     */
    public $CategoriasItens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategoriasItens',
        'app.Itens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoriasItens') ? [] : ['className' => CategoriasItensTable::class];
        $this->CategoriasItens = TableRegistry::getTableLocator()->get('CategoriasItens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasItens);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
