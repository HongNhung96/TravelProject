<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Danhgium Entity
 *
 * @property int $MaDanhGia
 * @property int $Loai
 * @property int $MaTour
 * @property int $MaKhach
 * @property string $NoiDungDG
 * @property int $TrangThai
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Danhgium extends Entity
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
        'Loai' => true,
        'MaTour' => true,
        'MaKhach' => true,
        'NoiDungDG' => true,
        'TrangThai' => true,
        'NgayTao' => true,
        'NgaySua' => true
    ];
}
