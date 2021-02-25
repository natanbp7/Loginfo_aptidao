<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\CategoriasProdutosBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\CategoriasProdutosBehavior Test Case
 */
class CategoriasProdutosBehaviorTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Behavior\CategoriasProdutosBehavior
     */
    public $CategoriasProdutos;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->CategoriasProdutos = new CategoriasProdutosBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasProdutos);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
