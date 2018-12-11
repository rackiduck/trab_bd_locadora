<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FitaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FitaTable Test Case
 */
class FitaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FitaTable
     */
    public $Fita;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fita'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fita') ? [] : ['className' => FitaTable::class];
        $this->Fita = TableRegistry::getTableLocator()->get('Fita', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fita);

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
