<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtorTable Test Case
 */
class AtorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AtorTable
     */
    public $Ator;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ator'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ator') ? [] : ['className' => AtorTable::class];
        $this->Ator = TableRegistry::getTableLocator()->get('Ator', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ator);

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
