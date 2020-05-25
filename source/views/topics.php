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
            <p>you are in: <a href="<?= URL_PATH; ?>">forums</a> > <p><?= $forumsInfo['name_forum']; ?></p></p>

            <form method="POST">
                <label>create a topic</label>
                <input type="text" name="name_topic" placeholder="topic name">
                <input type="text" name="description_topic" placeholder="topic description">
                <input type="submit" name="register_topic">
            </form>
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <div class="container">
        <div class="forums">
            <?php foreach($topics as $key => $value){ ?>
                <a href="<?= URL_PATH; ?>/post/<?= $value['slug_forum']; ?>/<?= $value['slug_topic']; ?>"><h2><?= $value['name_topic'] ?></h2></a>
                <p><?= $value['description_topic'] ?></p>
                <hr><!--forum-single-->
            <?php } ?>
        </div><!--forums-->
    </div><!--container-->
</body>
</html>