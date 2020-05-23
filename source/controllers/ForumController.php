<?php

namespace Source\Controllers;

class ForumController
{

    public $forumModel;

    public function __construct()
    {
        $this->forumModel = new \Source\Models\ForumModel;
    }

    public function home($data)
    {
        include("source/views/home.php");
    }

    public function error($data)
    {
        echo "<h1>Error {$data{"errcode"}}</h1>";
        var_dump($data);
    }
}