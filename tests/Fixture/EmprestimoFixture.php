<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmprestimoFixture
 *
 */
class EmprestimoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'emprestimo';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'identificador_emp' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'devolucao' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'saida' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'numero_associado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'filme_identificador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_ClienteEmprestimo' => ['type' => 'index', 'columns' => ['numero_associado'], 'length' => []],
            'FK_FilmeEmprestimo' => ['type' => 'index', 'columns' => ['filme_identificador'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['identificador_emp'], 'length' => []],
            'FK_ClienteEmprestimo' => ['type' => 'foreign', 'columns' => ['numero_associado'], 'references' => ['cliente', 'numero_associado'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_FilmeEmprestimo' => ['type' => 'foreign', 'columns' => ['filme_identificador'], 'references' => ['filme', 'filme_identificador'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'identificador_emp' => 1,
                'devolucao' => '2018-12-11 11:38:32',
                'saida' => '2018-12-11 11:38:32',
                'numero_associado' => 1,
                'filme_identificador' => 1
            ],
        ];
        parent::init();
    }
}
