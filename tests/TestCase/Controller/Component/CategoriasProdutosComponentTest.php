<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\CategoriasProdutosComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\CategoriasProdutosComponent Test Case
 */
class CategoriasProdutosComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\CategoriasProdutosComponent
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
        $registry = new ComponentRegistry();
        $this->CategoriasProdutos = new CategoriasProdutosComponent($registry);
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
