<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cliente Model
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 */
class ClienteTable extends Table
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

        $this->setTable('cliente');
        $this->setDisplayField('Sobrenome');
        $this->setPrimaryKey('numero_associado');
        
        $this->belongsToMany('Ator',[
            'foreignKey' => 'numero_associado',
            'targetForeignKey' => 'identificador_ator',
            'joinTable' => 'favorita'
        ]);
        $this->hasMany('Emprestimo',[
            'foreignKey' => 'numero_associado'
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
            ->integer('numero_associado')
            ->allowEmpty('numero_associado', 'create');

        $validator
            ->scalar('Sobrenome')
            ->maxLength('Sobrenome', 150)
            ->requirePresence('Sobrenome', 'create')
            ->notEmpty('Sobrenome');

        $validator
            ->scalar('prenome')
            ->maxLength('prenome', 100)
            ->requirePresence('prenome', 'create')
            ->notEmpty('prenome');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 250)
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->scalar('bairro')
            ->maxLength('bairro', 250)
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 8)
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('rua')
            ->maxLength('rua', 250)
            ->requirePresence('rua', 'create')
            ->notEmpty('rua');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 15)
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->scalar('telefone1')
            ->maxLength('telefone1', 15)
            ->allowEmpty('telefone1');

        return $validator;
    }
}
