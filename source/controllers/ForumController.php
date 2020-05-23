<?php

namespace Source\Controllers;

class ForumController
{

    public $forumModel;
    public $forumUtil;

    public function __construct()
    {
        $this->forumModel = new \Source\Models\ForumModel;
        $this->forumUtil = new \Source\Util\Utility;
    }

    public function home($data)
    {
        if(isset($_POST['register_forum']))
        {
            $forum_name = $_POST['forum_name'];
            $forum_description = $_POST['forum_description'];
            $forum_slug = $this->forumUtil->generateSlug($forum_name);

            $this->forumModel->registerForum($forum_name,$forum_description,$forum_slug);
        }

        include("source/views/home.php");
    }

    public function error($data)
    {
        echo "<h1>Error {$data{"errcode"}}</h1>";
        var_dump($data);
    }
}