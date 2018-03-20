<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KhachditourTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KhachditourTable Test Case
 */
class KhachditourTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KhachditourTable
     */
    public $Khachditour;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.khachditour'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Khachditour') ? [] : ['className' => KhachditourTable::class];
        $this->Khachditour = TableRegistry::get('Khachditour', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Khachditour);

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
