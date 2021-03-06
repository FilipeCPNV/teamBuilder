<?php

require_once("model/Team.php");
require_once("model/Member.php");
require_once (".env.php");

use ByJG\DbMigration\Exception\DatabaseDoesNotRegistered;
use ByJG\DbMigration\Exception\DatabaseIsIncompleteException;
use ByJG\DbMigration\Exception\DatabaseNotVersionedException;
use ByJG\DbMigration\Exception\InvalidMigrationFile;
use ByJG\DbMigration\Exception\OldVersionSchemaException;
use ByJG\DbMigration\Migration;
use ByJG\Util\Uri;
use PHPUnit\Framework\TestCase;

class TeamTest extends TestCase
{
    private Migration $migration;

    /**
     * @throws InvalidMigrationFile
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $connectionUri = new Uri(sprintf('mysql://%s:%s@localhost/teambuilder', USERNAME, PASSWORD));

        // Create the Migration instance
        $this->migration = new Migration($connectionUri, '.');

        // Register the Database or Databases can handle that URI:
        $this->migration->registerDatabase('mysql', \ByJG\DbMigration\Database\MySqlDatabase::class);
        $this->migration->registerDatabase('maria', \ByJG\DbMigration\Database\MySqlDatabase::class);

        // Add a callback progress function to receive info from the execution
        $this->migration->addCallbackProgress(function ($action, $currentVersion, $fileInfo) {
            echo "$action, $currentVersion, ${fileInfo['description']}\n";
        });
    }

    /**
     * @throws DatabaseDoesNotRegistered
     * @throws DatabaseNotVersionedException
     * @throws InvalidMigrationFile
     * @throws DatabaseIsIncompleteException
     * @throws OldVersionSchemaException
     */
    public function setUp(): void
    {
        $this->migration->reset();
        $this->migration->up(1);
    }

    /**
     * @covers Team::all()
     */
    public function testAll()
    {
        $this->assertEquals(15,count(TeamController::all()));
    }

    /**
     * @covers TeamController::find(id)
     */
    public function testFind()
    {
        $this->assertInstanceOf(TeamController::class,TeamController::find(1));
        $this->assertNull(TeamController::find(1000));
    }

    /**
     * @covers $team->create()
     */
    public function testCreate()
    {
        $team = new TeamController();
        $team->name = "XXX";
        $team->state_id = 1;
        $this->assertTrue($team->create());
        $this->assertFalse($team->create());
    }

    /**
     * @covers $team->save()
     */
    public function testSave()
    {
        $team = TeamController::find(1);
        $savename = $team->name;
        $team->name = "newname";
        $this->assertTrue($team->save());
        $this->assertEquals("newname",TeamController::find(1)->name);
        $team->name = $savename;
        $team->save();
    }

    /**
     * @covers $team->save() doesn't allow duplicates
     */
    public function testSaveRejectsDuplicates()
    {
        $team = TeamController::find(1);
        $team->name = TeamController::find(2)->name;
        $this->assertFalse($team->save());
    }

    /**
     * @covers $team->delete()
     */
    public function testDelete()
    {
        $team = TeamController::find(1);
        $this->assertFalse($team->delete()); // expected to fail because of foreign key
        $team = TeamController::make(["name" => "dummy", "state_id" => 1]);
        $team->create();
        $id = $team->id;
        $this->assertTrue($team->delete()); // expected to succeed
        $this->assertNull(TeamController::find($id)); // we should not find it back
    }

    /**
     * @covers TeamController::destroy(id)
     */
    public function testDestroy()
    {
        $this->assertFalse(TeamController::destroy(1)); // expected to fail because of foreign key
        $team = TeamController::make(["name" => "dummy", "state_id" => 1]);
        $team->create();
        $id = $team->id;
        $this->assertTrue(TeamController::destroy($id)); // expected to succeed
        $this->assertNull(TeamController::find($id)); // we should not find it back
    }

    /**
     * Assume the well-know dataset of 'teambuilder.sql'
     * @covers $member->teams()
     */
    public function testTeams()
    {
        // NEED TO IMPLEMENT RELATIONSHIPS
       // $this->assertEquals(1,count(Member::find(3)->teams()));
       // $this->assertEquals(0,count(Member::find(9)->teams()));
       // $this->assertEquals(3,count(Member::find(10)->teams()));
    }
}
