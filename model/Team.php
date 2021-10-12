<?php

require_once 'vendor/autoload.php';

use Thynkon\SimpleOrm\Model;
use Thynkon\SimpleOrm\database\DB;

class Team extends Model
{
    static protected string $table = "teams";
    protected string $primaryKey = "id";
    public int $id;
    public string $name;
    public int $state_id;

    public function members()
    {
        $query = <<<EOL
        SELECT members.* FROM members
        INNER JOIN team_member ON team_member.member_id = members.id
        INNER JOIN teams ON teams.id = team_member.team_id
        where teams.id = :id
        EOL;
        $connector = DB::getInstance();
        return $connector->selectMany($query, ["id" => $this->id], Member::class);
    }
    public function captain()
    {
        $query = <<<EOL
        SELECT members.name FROM members
        INNER JOIN team_member ON team_member.member_id = members.id
        where team_member.team_id = :id and team_member.is_captain = "1"
        EOL;
        $connector = DB::getInstance();
        return $connector->selectOne($query, ["id" => $this->id], Member::class);
    }
}