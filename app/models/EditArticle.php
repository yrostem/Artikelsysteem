<?php


use Phalcon\Mvc\Model;

class EditArticle extends Model
{
    public $id;
    public $article_title;
    public $article_text;
    public $article_summary;
    public $creation_date;

}