<?php

namespace Source\Models;

class TopicModel
{
    public function registerTopic($name_topic,$description_topic,$slug_topic,$slug_forum)
    {

        if($name_topic == "" || $description_topic == "")
        {
            \Source\Util\Utility::jsAlert("fill in all fields");
        }else{

            $sql = \Source\Util\MySql::connect()->prepare("INSERT INTO `tb_topics` VALUES (null,?,?,?,?) ");
            if($sql->execute(array($name_topic,$description_topic,$slug_topic,$slug_forum)))
            {
                \Source\Util\Utility::jsAlert("topic successfully creating");
            }else {
                \Source\Util\Utility::jsAlert("error creating topic, try again");
            }

        }
    }

    public static function getInfoTopic($slug_forum,$count)
    {
        $sql = \Source\Util\MySql::connect()->prepare("SELECT * FROM `tb_topics` WHERE slug_forum = ? ");
        $sql->execute(array($slug_forum));

        if($count == true){
            return $sql->rowCount();
        }else if($count == false){
            return $sql->fetch();
        }

    }

    public function listTopics($slug_forum)
    {
        $sql = \Source\Util\MySql::connect()->prepare("SELECT * FROM `tb_topics` WHERE slug_forum = ? ");
        $sql->execute(array($slug_forum));

        return $sql->fetchAll();
    }
}