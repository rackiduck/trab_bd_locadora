<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ator Entity
 *
 * @property string $nome_real
 * @property \Cake\I18n\FrozenDate|null $nascimento
 * @property string|null $nome_ficticio
 * @property int $identificador_ator
 */
class Ator extends Entity
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
        'nome_real' => true,
        'nascimento' => true,
        'nome_ficticio' => true,
        'filme' => true
    ];
}
