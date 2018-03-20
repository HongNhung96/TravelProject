<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiemdulichTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiemdulichTable Test Case
 */
class DiemdulichTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiemdulichTable
     */
    public $Diemdulich;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diemdulich'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Diemdulich') ? [] : ['className' => DiemdulichTable::class];
        $this->Diemdulich = TableRegistry::get('Diemdulich', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diemdulich);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
