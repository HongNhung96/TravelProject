<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dattour Entity
 *
 * @property int $MaDatTour
 * @property int $MaChiTiet
 * @property int $MaKH
 * @property \Cake\I18n\FrozenDate $NgayDat
 * @property int $TongSoCho
 * @property int $ThanhTien
 * @property string $DonViTinh
 * @property int $TrangThai
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Dattour extends Entity
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
        'MaChiTiet' => true,
        'MaKH' => true,
        'NgayDat' => true,
        'TongSoCho' => true,
        'ThanhTien' => true,
        'DonViTinh' => true,
        'TrangThai' => true,
        'NgayTao' => true,
        'NgaySua' => true
    ];
}
