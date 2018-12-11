<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmprestimoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmprestimoTable Test Case
 */
class EmprestimoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmprestimoTable
     */
    public $Emprestimo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Emprestimo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Emprestimo') ? [] : ['className' => EmprestimoTable::class];
        $this->Emprestimo = TableRegistry::getTableLocator()->get('Emprestimo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emprestimo);

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
