<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fitum Entity
 *
 * @property int $numero_fita
 * @property int $filme_identificador
 */
class Fitum extends Entity
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
        'filme_identificador' => true
    ];
}
