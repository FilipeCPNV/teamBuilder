<?php
require "../.env.php";

/**
 * File : DB.php
 * Author : F. Martins
 * Created : 14.09.21
 * Modified last :
 **/

class DB
{
    private static function getPDO()
    {
        return new PDO(DSN, PDO_USERNAME, PDO_PASSWORD);
    }

    public static function selectMany($sql, $args)
    {
        $connection = self::getPDO();
        $statement = $connection->prepare($sql);

        if ($statement->execute($args)) {
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    public static function selectOne($sql, $args)
    {
        $connection = self::getPDO();
        $statement = $connection->prepare($sql);

        if ($statement->execute($args)) {
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

    }

    public static function insert($sql, $args)
    {
        $connection = self::getPDO();
        $statement = $connection->prepare($sql);

        if ($statement->execute($args)) {
            return $connection->lastInsertId();
        }
    }

    public static function execute($sql, $args)
    {
        $connection = self::getPDO();
        $statement = $connection->prepare($sql);

        if ($statement->execute($args)) {
            return $statement->rowCount();
        }
    }
}