<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Diemdulich Entity
 *
 * @property int $MaDiemDL
 * @property string $TenDiemDL
 * @property string $Anh
 * @property string $ThongTin
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 * @property int $MaQuocGia
 */
class Diemdulich extends Entity
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
        'TenDiemDL' => true,
        'Anh' => true,
        'ThongTin' => true,
        'NgayTao' => true,
        'NgaySua' => true,
        'MaQuocGia' => true
    ];
}
