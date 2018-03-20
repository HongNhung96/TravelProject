<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tour Entity
 *
 * @property int $MaTour
 * @property string $TenTour
 * @property int $MaLoaiTour
 * @property string $Anh
 * @property int $GiaTour
 * @property int $NoiKhoiHanh
 * @property int $MaDiemDL
 * @property string $GioiThieu
 * @property string $NoiDung
 * @property string $DieuKhoan
 * @property int $SoNgay
 * @property int $SoDem
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Tour extends Entity
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
        'TenTour' => true,
        'MaLoaiTour' => true,
        'Anh' => true,
        'GiaTour' => true,
        'NoiKhoiHanh' => true,
        'MaDiemDL' => true,
        'GioiThieu' => true,
        'NoiDung' => true,
        'DieuKhoan' => true,
        'SoNgay' => true,
        'SoDem' => true,
        'NgayTao' => true,
        'NgaySua' => true
    ];
}
