<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TabelasProdutosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TabelasProdutosTable Test Case
 */
class TabelasProdutosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TabelasProdutosTable
     */
    public $TabelasProdutos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TabelasProdutos',
        'app.CategoriasProdutos',
        'app.Vendas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TabelasProdutos') ? [] : ['className' => TabelasProdutosTable::class];
        $this->TabelasProdutos = TableRegistry::getTableLocator()->get('TabelasProdutos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TabelasProdutos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
