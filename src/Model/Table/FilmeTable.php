<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Filme Model
 *
 * @method \App\Model\Entity\Filme get($primaryKey, $options = [])
 * @method \App\Model\Entity\Filme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Filme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Filme|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filme|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Filme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Filme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Filme findOrCreate($search, callable $callback = null, $options = [])
 */
class FilmeTable extends Table
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

        $this->setTable('filme');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('filme_identificador');
        
        $this->belongsToMany('Ator',[
            'foreignKey' => 'filme_identificador',
            'targetForeignKey' => 'identificador_ator',
            'joinTable' => 'atua'
        ]);
        // $this->belongsToMany('Clientgroups', [
        //     'foreignKey' => 'client_id',
        //     'targetForeignKey' => 'clientgroup_id',
        //     'joinTable' => 'clientgroups_clients',
        //     'through' => 'ClientgroupsClients'
        // ]);
        $this->belongsToMany('Categoria', [
            'foreignKey' => 'filme_identificador',
            'targetForeignKey' => 'identificador_categoria',
            'joinTable' => 'filmecategoria'
        ]);
        $this->hasmany('Fita',['foreignKey' => 'filme_identificador']);
        $this->hasmany('Emprestimo', ['foreignKey' => 'filme_identificador']);
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
            ->integer('filme_identificador')
            ->allowEmpty('filme_identificador', 'create');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 250)
            ->allowEmpty('titulo');

        $validator
            ->boolean('disponivel')
            ->allowEmpty('disponivel');

        return $validator;
    }
}
