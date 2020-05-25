<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL_PATH; ?>/source/style/general/style.css" />
  <title>Forum</title>
</head>
<body>
    <header>
        <div class="container">
            <p>you are in: forums</p>
            <form method="POST">
                <label>create a forum</label>
                <input type="text" name="forum_name" placeholder="forum name">
                <input type="text" name="forum_description" placeholder="description">
                <input type="submit" name="register_forum">
            </form>
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <div class="container">
        <div class="forums">
            <?php foreach($forums as $key => $value){ ?>
                <?php
                    $getTopicNumer = \Source\Models\TopicModel::getInfoTopic($value['slug_forum'],true);
                ?>
                <span>number of topics <?= $getTopicNumer; ?></span>
                <a href="<?= URL_PATH; ?>/topics/<?= $value['slug_forum']; ?>"><h2><?= $value['name_forum'] ?></h2></a>
                <p><?= $value['description'] ?></p>
                <hr>
            <?php } ?>
        </div><!--forums-->
    </div><!--container-->
</body>
</html>