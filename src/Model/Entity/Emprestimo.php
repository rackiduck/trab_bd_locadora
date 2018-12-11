<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emprestimo Entity
 *
 * @property int $identificador_emp
 * @property \Cake\I18n\FrozenTime $devolucao
 * @property \Cake\I18n\FrozenTime $saida
 * @property int $numero_associado
 * @property int $filme_identificador
 */
class Emprestimo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'devolucao' => true,
        'saida' => true,
        'numero_associado' => true,
        'filme_identificador' => true
    ];
}
