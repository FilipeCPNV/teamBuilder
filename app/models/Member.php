<?php
require_once 'vendor/autoload.php';
require_once 'app/models/Team.php';

use Thynkon\SimpleOrm\database\DB;
use Thynkon\SimpleOrm\Model;

class Member extends Model
{
    static protected string $table = "members";
    protected string $primaryKey = "id";
    public int $id;
    public string $name;
    public string $password;
    public int $role_id;

    public function teams()
    {

        $query = "SELECT teams.* FROM members
        INNER JOIN team_member ON team_member.member_id = members.id
        INNER JOIN teams ON teams.id = team_member.team_id
        where members.id = :id";
        $connector = DB::getInstance();
        return $connector->selectMany($query, ["id" => $this->id], Team::class);
    }

    public static function moderators()
    {
        $query = "SELECT m.name FROM members m
        LEFT JOIN roles r on r.id = m.role_id
        where r.slug = 'MOD'";
        $connector = DB::getInstance();
        return $connector->selectMany($query, [], Member::class);
    }
}