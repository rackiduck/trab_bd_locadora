<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FilmeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FilmeTable Test Case
 */
class FilmeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FilmeTable
     */
    public $Filme;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Filme'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Filme') ? [] : ['className' => FilmeTable::class];
        $this->Filme = TableRegistry::getTableLocator()->get('Filme', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Filme);

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
