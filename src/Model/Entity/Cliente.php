<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $numero_associado
 * @property string $Sobrenome
 * @property string $prenome
 * @property string $cidade
 * @property string $bairro
 * @property string $cep
 * @property string $rua
 * @property string $telefone
 * @property string|null $telefone1
 */
class Cliente extends Entity
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
        'Sobrenome' => true,
        'prenome' => true,
        'cidade' => true,
        'bairro' => true,
        'cep' => true,
        'rua' => true,
        'telefone' => true,
        'telefone1' => true
    ];
}
