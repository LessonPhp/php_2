<?php

namespace App;

use App\Models\Article;

abstract class Model
{
    public const TABLE = '';
    public $id;
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql,
            [],
            static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $result = $db->query($sql,
            [':id' => $id],
            static::class)[0];
        if(!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }
}