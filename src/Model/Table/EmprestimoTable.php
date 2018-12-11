<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emprestimo Model
 *
 * @method \App\Model\Entity\Emprestimo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emprestimo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emprestimo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emprestimo findOrCreate($search, callable $callback = null, $options = [])
 */
class EmprestimoTable extends Table
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

        $this->setTable('emprestimo');
        $this->setDisplayField('Filme.titulo');
        $this->setPrimaryKey('identificador_emp');
        $this->belongsTo('Cliente')
            ->setForeignKey('numero_associado');
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
            ->integer('identificador_emp')
            ->allowEmpty('identificador_emp', 'create');

        $validator
            ->dateTime('devolucao')
            ->requirePresence('devolucao', 'create')
            ->notEmpty('devolucao');

        $validator
            ->dateTime('saida')
            ->requirePresence('saida', 'create')
            ->notEmpty('saida');

        $validator
            ->integer('numero_associado')
            ->requirePresence('numero_associado', 'create')
            ->notEmpty('numero_associado');

        $validator
            ->integer('filme_identificador')
            ->requirePresence('filme_identificador', 'create')
            ->notEmpty('filme_identificador');

        return $validator;
    }
}
