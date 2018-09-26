<?php
/**
 * Created by PhpStorm.
 * User: Yad
 * Date: 11-6-2018
 * Time: 12:53
 */

use Phalcon\Mvc\Model;


class Index extends Model
{
    public $id;
    public $article_title;
    public $article_text;
    public $article_summary;
}