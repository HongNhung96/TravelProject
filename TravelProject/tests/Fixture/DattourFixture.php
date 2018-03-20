<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DattourFixture
 *
 */
class DattourFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'dattour';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MaDatTour' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'MaChiTiet' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MaKH' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NgayDat' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'TongSoCho' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ThanhTien' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DonViTinh' => ['type' => 'string', 'length' => 10, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TrangThai' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NgayTao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'NgaySua' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'MaChiTiet' => ['type' => 'index', 'columns' => ['MaChiTiet'], 'length' => []],
            'MaKH' => ['type' => 'index', 'columns' => ['MaKH'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaDatTour'], 'length' => []],
            'dattour_ibfk_1' => ['type' => 'foreign', 'columns' => ['MaChiTiet'], 'references' => ['chitiettour', 'MaChiTiet'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'dattour_ibfk_2' => ['type' => 'foreign', 'columns' => ['MaKH'], 'references' => ['khachhang', 'MaKH'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'MaDatTour' => 1,
            'MaChiTiet' => 1,
            'MaKH' => 1,
            'NgayDat' => '2018-03-19',
            'TongSoCho' => 1,
            'ThanhTien' => 1,
            'DonViTinh' => 'Lorem ip',
            'TrangThai' => 1,
            'NgayTao' => 1521443872,
            'NgaySua' => 1521443872
        ],
    ];
}
