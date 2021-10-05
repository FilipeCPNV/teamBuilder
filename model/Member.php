<?php

require_once 'model/Team.php';

use Thynkon\SimpleOrm\database\Connector;
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
        $db = Connector::getInstance();
        $connection = $db->getConnection();
        $query = <<<EOL
        SELECT teams.name FROM members
                    INNER JOIN team_member ON team_member.member_id = members.id
                    INNER JOIN teams ON teams.id = team_member.team_id
                    where members.id = :id
        EOL;
        $statement = $connection->prepare($query);

        if ($statement->execute(["id" => $this->id])) {
            $teams = $statement->fetchAll(PDO::FETCH_CLASS, Team::class);
        }
        return $teams;
    }
}