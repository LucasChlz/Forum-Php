<?php

namespace Source\Models;

class PostModel
{
    public function createPost($name,$subject,$message,$slug_forum,$slug_topic)
    {

        if($name == "" || $subject == "" || $message == "")
        {
            \Source\Util\Utility::jsAlert("fill in all fields");

        }else {

            $sql = \Source\Util\MySql::connect()->prepare("INSERT INTO `tb_posts` VALUES (null,?,?,?,?,?) ");
            if($sql->execute(array($name,$subject,$message,$slug_forum,$slug_topic)))
            {
                \Source\Util\Utility::jsAlert("post successfully creating");
            }else {
                \Source\Util\Utility::jsAlert("error creating post, try again");
            }
        }
    }

    public function listPosts($slug_forum,$slug_topic)
    {
        $sql = \Source\Util\MySql::connect()->prepare("SELECT * FROM `tb_posts` WHERE slug_forum = ? AND slug_topic = ?");
        $sql->execute(array($slug_forum,$slug_topic));
        
        return $sql->fetchAll();
    }

}