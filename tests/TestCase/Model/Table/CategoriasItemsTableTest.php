<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasItemsTable Test Case
 */
class CategoriasItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasItemsTable
     */
    public $CategoriasItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CategoriasItems',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CategoriasItems') ? [] : ['className' => CategoriasItemsTable::class];
        $this->CategoriasItems = TableRegistry::getTableLocator()->get('CategoriasItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasItems);

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
