<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChatroomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChatroomsTable Test Case
 */
class ChatroomsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChatroomsTable
     */
    public $Chatrooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.chatrooms',
        'app.companies',
        'app.users',
        'app.payments',
        'app.producers',
        'app.services',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Chatrooms') ? [] : ['className' => ChatroomsTable::class];
        $this->Chatrooms = TableRegistry::get('Chatrooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chatrooms);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
