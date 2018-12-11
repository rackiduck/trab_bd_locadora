<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fita Model
 *
 * @method \App\Model\Entity\Fitum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fitum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fitum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fitum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fitum|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fitum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fitum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fitum findOrCreate($search, callable $callback = null, $options = [])
 */
class FitaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('fita');
        $this->setDisplayField('numero_fita');
        $this->setPrimaryKey('numero_fita');
        $this->belongsTo('Filme')
            ->setForeignKey('filme_identificador');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('numero_fita')
            ->allowEmpty('numero_fita', 'create');

        $validator
            ->integer('filme_identificador')
            ->requirePresence('filme_identificador', 'create')
            ->notEmpty('filme_identificador');

        return $validator;
    }
}
