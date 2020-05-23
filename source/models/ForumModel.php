<?php

namespace Source\Models;

class ForumModel
{
    public function registerForum($forum_name,$forum_description,$forum_slug)
    {  
        $sql = \Source\Util\MySql::connect()->prepare("INSERT INTO `tb_forum` VALUES (null,?,?,?) ");
        if($sql->execute(array($forum_name,$forum_slug,$forum_description)))
        {
            \Source\Util\Utility::jsAlert("forum successfully creating");
        }else {
            \Source\Util\Utility::jsAlert("error creating forum, try again");
        }
    }
}