<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Khachhang Entity
 *
 * @property int $MaKH
 * @property string $TenKH
 * @property string $MatKhauKH
 * @property int $Quyen
 * @property \Cake\I18n\FrozenDate $NgaySinh
 * @property string $GioiTinh
 * @property string $MaTKhoan
 * @property string $NganHang
 * @property string $DiaChi
 * @property string $Email
 * @property int $DienThoai
 * @property int $MaQuocGia
 * @property int $SoCMT
 * @property \Cake\I18n\FrozenTime $NgayTao
 * @property \Cake\I18n\FrozenTime $NgaySua
 */
class Khachhang extends Entity
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
    //     'TenKH' => true,
    //     'MatKhauKH' => true,
    //     'Quyen' => true,
    //     'NgaySinh' => true,
    //     'GioiTinh' => true,
    //     'MaTKhoan' => true,
    //     'NganHang' => true,
    //     'DiaChi' => true,
    //     'Email' => true,
    //     'DienThoai' => true,
    //     'MaQuocGia' => true,
    //     'SoCMT' => true,
    //     'NgayTao' => true,
    //     'NgaySua' => true
    // ];
}
