<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DanhgiaFixture
 *
 */
class DanhgiaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'danhgia';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MaDanhGia' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Loai' => ['type' => 'integer', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MaTour' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'MaKhach' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NoiDungDG' => ['type' => 'string', 'length' => 500, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'TrangThai' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'NgayTao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'NgaySua' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'MaKhach' => ['type' => 'index', 'columns' => ['MaKhach'], 'length' => []],
            'MaTour' => ['type' => 'index', 'columns' => ['MaTour'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaDanhGia'], 'length' => []],
            'danhgia_ibfk_2' => ['type' => 'foreign', 'columns' => ['MaTour'], 'references' => ['tour', 'MaTour'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'danhgia_ibfk_3' => ['type' => 'foreign', 'columns' => ['MaKhach'], 'references' => ['khachhang', 'MaKH'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'MaDanhGia' => 1,
            'Loai' => 1,
            'MaTour' => 1,
            'MaKhach' => 1,
            'NoiDungDG' => 'Lorem ipsum dolor sit amet',
            'TrangThai' => 1,
            'NgayTao' => 1521381088,
            'NgaySua' => 1521381088
        ],
    ];
}
