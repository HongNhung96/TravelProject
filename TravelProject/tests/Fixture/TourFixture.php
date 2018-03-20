<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TourFixture
 *
 */
class TourFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tour';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MaTour' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'TenTour' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'MaLoaiTour' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Anh' => ['type' => 'string', 'length' => 191, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'GiaTour' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NoiKhoiHanh' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MaDiemDL' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'GioiThieu' => ['type' => 'string', 'length' => 2000, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NoiDung' => ['type' => 'string', 'length' => 5000, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'DieuKhoan' => ['type' => 'string', 'length' => 5000, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'SoNgay' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'SoDem' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NgayTao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'NgaySua' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'MaLoaiTour' => ['type' => 'index', 'columns' => ['MaLoaiTour'], 'length' => []],
            'MaDiemDL' => ['type' => 'index', 'columns' => ['MaDiemDL'], 'length' => []],
            'NoiKhoiHanh' => ['type' => 'index', 'columns' => ['NoiKhoiHanh'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaTour'], 'length' => []],
            'tour_ibfk_1' => ['type' => 'foreign', 'columns' => ['MaLoaiTour'], 'references' => ['loaitour', 'MaLoaiTour'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_ibfk_2' => ['type' => 'foreign', 'columns' => ['MaDiemDL'], 'references' => ['diemdulich', 'MaDiemDL'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'tour_ibfk_3' => ['type' => 'foreign', 'columns' => ['NoiKhoiHanh'], 'references' => ['diemdulich', 'MaDiemDL'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'MaTour' => 1,
            'TenTour' => 'Lorem ipsum dolor sit amet',
            'MaLoaiTour' => 1,
            'Anh' => 'Lorem ipsum dolor sit amet',
            'GiaTour' => 1,
            'NoiKhoiHanh' => 1,
            'MaDiemDL' => 1,
            'GioiThieu' => 'Lorem ipsum dolor sit amet',
            'NoiDung' => 'Lorem ipsum dolor sit amet',
            'DieuKhoan' => 'Lorem ipsum dolor sit amet',
            'SoNgay' => 1,
            'SoDem' => 1,
            'NgayTao' => 1521386156,
            'NgaySua' => 1521386156
        ],
    ];
}
