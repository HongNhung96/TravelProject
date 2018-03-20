<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DiemdulichFixture
 *
 */
class DiemdulichFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'diemdulich';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'MaDiemDL' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'TenDiemDL' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Anh' => ['type' => 'string', 'length' => 191, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'ThongTin' => ['type' => 'string', 'length' => 2000, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'NgayTao' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'NgaySua' => ['type' => 'timestamp', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'MaQuocGia' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'MaQuocGia' => ['type' => 'index', 'columns' => ['MaQuocGia'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['MaDiemDL'], 'length' => []],
            'diemdulich_ibfk_1' => ['type' => 'foreign', 'columns' => ['MaQuocGia'], 'references' => ['quocgia', 'MaQuocGia'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'MaDiemDL' => 1,
            'TenDiemDL' => 'Lorem ipsum dolor sit amet',
            'Anh' => 'Lorem ipsum dolor sit amet',
            'ThongTin' => 'Lorem ipsum dolor sit amet',
            'NgayTao' => 1520224678,
            'NgaySua' => 1520224678,
            'MaQuocGia' => 1
        ],
    ];
}
