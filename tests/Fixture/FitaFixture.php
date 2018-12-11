<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FitaFixture
 *
 */
class FitaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'fita';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'numero_fita' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'filme_identificador' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_FilmeFita' => ['type' => 'index', 'columns' => ['filme_identificador'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['numero_fita'], 'length' => []],
            'FK_FilmeFita' => ['type' => 'foreign', 'columns' => ['filme_identificador'], 'references' => ['filme', 'filme_identificador'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'numero_fita' => 1,
                'filme_identificador' => 1
            ],
        ];
        parent::init();
    }
}
