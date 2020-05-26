# Forum-Php
#### forum made in php language with mvc focused on my learning

## How to use
#### to start using this forum, you need to make some changes
<ul>
  <li>first you need to go to the configuration file and change the constant values for your use</li><br/>
  <img src="https://github.com/LucasChlz/Forum-Php/blob/master/imgReadME/img1.png" width="auto">
</ul>

```
define("URL_PATH","your URL");
define("HOST","your host");
define("USER","your use");
define("PASSWORD","your password");
define("DATABASE","your database");
```

<ul>
  <li>now you will need to create a database with the following tables</li>
  <ul>
    <li>tb_forum: id, name_forum, slug_forum, description</li>
  </ul>
  
  <ul>
    <li>tb_posts: id, name, subject, message, slug_forum, slug_topic</li>
  </ul>
  
    
  <ul>
    <li>tb_topics: id, name_topic, description_topic, slug_topic, slug_forum</li>
  </ul>
</ul>
