<?php

namespace Source\Models;

class ForumModel
{
    public function registerForum($forum_name,$forum_description,$forum_slug)
    {
        if($forum_description == "" || $forum_name == "")
        {
            \Source\Util\Utility::jsAlert("fill in all fields");
        }else{
            
            $sql = \Source\Util\MySql::connect()->prepare("INSERT INTO `tb_forum` VALUES (null,?,?,?) ");
            if($sql->execute(array($forum_name,$forum_slug,$forum_description)))
            {
                \Source\Util\Utility::jsAlert("forum successfully creating");
            }else {
                \Source\Util\Utility::jsAlert("error creating forum, try again");
            }
        }
        
    }

    public function forumList($state,$slug)
    {
        
        if($state == true)
        {
            $sql = \Source\Util\MySql::connect()->prepare("SELECT * FROM `tb_forum`");
            $sql->execute();
            return $forums = $sql->fetchAll();

        }else if($state == false AND $slug != "")
        {
            $sql = \Source\Util\MySql::connect()->prepare("SELECT * FROM `tb_forum` WHERE slug_forum = ?");
            $sql->execute(array($slug));
            return $forums = $sql->fetch();
        }
    }
}