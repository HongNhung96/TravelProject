<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Khachditour Entity
 *
 * @property int $MaKhach
 * @property string $TenKhach
 * @property int $MaDatTour
 * @property \Cake\I18n\FrozenDate $NgaySinhKhach
 * @property string $DiaChiKhach
 * @property int $GioiTinhKhach
 * @property int $LoaiKhach
 * @property int $PhongDon
 * @property int $ThanhTien
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Khachditour extends Entity
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
    // protected $_accessible = [
    //     'TenKhach' => true,
    //     'MaDatTour' => true,
    //     'NgaySinhKhach' => true,
    //     'DiaChiKhach' => true,
    //     'GioiTinhKhach' => true,
    //     'LoaiKhach' => true,
    //     'PhongDon' => true,
    //     'ThanhTien' => true,
    //     'NgayTao' => true,
    //     'NgaySua' => true
    // ];
}
