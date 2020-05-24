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
            if($sql->execute(array($name_topic,$description_topic,$slug_topic,$slug_forum['slug'])))
            {
                \Source\Util\Utility::jsAlert("topic successfully creating");
            }else {
                \Source\Util\Utility::jsAlert("error creating forum, try again");
            }
        }
    }
}