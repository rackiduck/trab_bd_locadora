<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ator Model
 *
 * @method \App\Model\Entity\Ator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ator findOrCreate($search, callable $callback = null, $options = [])
 */
class AtorTable extends Table
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

        $this->setTable('ator');
        $this->setDisplayField('nome_real');
        $this->setPrimaryKey('identificador_ator');
        $this->belongsToMany('Filme',[
            'foreignKey' => 'identificador_ator',
            'targetForeignKey' => 'filme_identificador',
            'joinTable' => 'atua'
        ]);
        $this->belongsToMany('Filme',[
            'foreignKey' => 'identificador_ator',
            'targetForeignKey' => 'filme_identificador',
            'joinTable' => 'atua'
        ]);
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
            ->scalar('nome_real')
            ->maxLength('nome_real', 150)
            ->requirePresence('nome_real', 'create')
            ->notEmpty('nome_real');

        $validator
            ->date('nascimento')
            ->allowEmpty('nascimento');

        $validator
            ->scalar('nome_ficticio')
            ->maxLength('nome_ficticio', 150)
            ->allowEmpty('nome_ficticio');

        $validator
            ->integer('identificador_ator')
            ->allowEmpty('identificador_ator', 'create');

        return $validator;
    }
}
