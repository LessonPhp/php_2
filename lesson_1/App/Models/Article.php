<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;


    public static function findAllNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE. ' ORDER BY id DESC LIMIT 3';
        return $db->query($sql,
            [],
            self::class);
    }

    public static function findByIdArticle($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' WHERE id=:id';
        $result = $db->query($sql,
            [':id' => $id],
            self::class)[0];
        if(!empty($result)) {
            return $result;
        } else {
            return false;
        }
    }

}