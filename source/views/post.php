<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= URL_PATH; ?>/source/style/general/style.css" />
  <title><?= $topicsInfo['name_topic']; ?> | Posts</title>
</head>
<body>
    <header>
        <div class="container">
            <p>you are in: <a href="<?= URL_PATH; ?>">forums</a> > <a href="<?= URL_PATH.'/topics/'.$forumsInfo['slug_forum'] ?>"><?= $forumsInfo['name_forum']; ?></a> > <p><?= $topicsInfo['name_topic'] ?></p></p>

            <a class="create" href="<?= URL_PATH ?>/create/<?= $forumsInfo['slug_forum']; ?>/<?= $topicsInfo['slug_topic']; ?>">create post</a>
            <div class="clear"></div>
        </div><!--container-->
    </header>

    <div class="container">
        <div class="forums">
           
        </div><!--forums-->
    </div><!--container-->
</body>
</html>