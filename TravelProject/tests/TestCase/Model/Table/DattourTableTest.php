<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DattourTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DattourTable Test Case
 */
class DattourTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DattourTable
     */
    public $Dattour;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dattour'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dattour') ? [] : ['className' => DattourTable::class];
        $this->Dattour = TableRegistry::get('Dattour', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dattour);

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
