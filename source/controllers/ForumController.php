<?php

namespace Source\Controllers;

class ForumController
{

    public $forumModel;
    public $topicModel;
    public $postModel;
    public $forumUtil;

    public function __construct()
    {
        $this->forumModel = new \Source\Models\ForumModel;
        $this->topicModel = new \Source\Models\TopicModel;
        $this->postModel = new \Source\Models\PostModel;
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

        $forums = $this->forumModel->forumList(true,"");
        include("source/views/home.php");
    }

    public function topics($data)
    {
        if(isset($_POST['register_topic']))
        {
            $name_topic = $_POST['name_topic'];
            $description_topic = $_POST['description_topic'];
            $slug_topic = $this->forumUtil->generateSlug($name_topic);

            $this->topicModel->registerTopic($name_topic,$description_topic,$slug_topic,$data);
        }

        $topics = $this->topicModel->listTopics($data['slugForum']);
        $topicsInfo = $this->topicModel->getInfoTopic($data['slugForum'],false);
        $forumsInfo = $this->forumModel->forumList(false,$data['slugForum']);

        include("source/views/topics.php");
    }

    public function posts($data)
    {
        $topicsInfo = $this->topicModel->getInfoTopic($data['slugForum'],false);
        $forumsInfo = $this->forumModel->forumList(false,$data['slugForum']);

        $slug_forum = $this->forumUtil->generateSlug($forumsInfo['name_forum']);
        $slug_topic = $this->forumUtil->generateSlug($topicsInfo['name_topic']);

        $posts = $this->postModel->listPosts($slug_forum,$slug_topic);
        
        include("source/views/post.php");
    }

    public function createPost($data)
    {
        $topicsInfo = $this->topicModel->getInfoTopic($data['slugForum'],false);
        $forumsInfo = $this->forumModel->forumList(false,$data['slugForum']);

        if(isset($_POST['create_post']))
        {
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $slug_forum = $this->forumUtil->generateSlug($forumsInfo['name_forum']);
            $slug_topic = $this->forumUtil->generateSlug($topicsInfo['name_topic']);
            
            $this->postModel->createPost($name,$subject,$message,$slug_forum,$slug_topic);
        }

        include("source/views/create_post.php");
    }

    public function error($data)
    {
        echo "<h1>Error {$data{"errcode"}}</h1>";
        var_dump($data);
    }
}