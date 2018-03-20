<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TourTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TourTable Test Case
 */
class TourTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TourTable
     */
    public $Tour;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tour'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Tour') ? [] : ['className' => TourTable::class];
        $this->Tour = TableRegistry::get('Tour', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tour);

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
