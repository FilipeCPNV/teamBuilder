<?php

use PHPUnit\Framework\TestCase;

require "model/DB.php";

final class DBTest extends TestCase
{
    public function testSelectMany(): void
    {
        $this->assertEquals(
            [
                ["id" => 1, "slug" => "MEM", "name" => "Member"],
                ["id" => 2, "slug" => "MOD", "name" => "Moderator"],
                ["id" => 3, "slug" => "XXX", "name" => "Correcteur"],
            ],
            DB::selectMany("SELECT * FROM roles", [])
        );
    }

    public function testSelectOne(): void
    {
        $this->assertEquals(
            ["id" => 2, "slug" => "MOD", "name" => "Moderator"],
            DB::selectOne("SELECT * FROM roles where slug = :slug", ["slug" => "MOD"])
        );
    }

    public function testInsertData(): void
    {
        $this->assertEquals()
    }

    public function testUpdateData(): void
    {
    }
}