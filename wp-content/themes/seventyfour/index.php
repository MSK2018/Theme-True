<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php wp_title(' | ','true','right'); bloginfo('name');  ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
</head>
<body>

<?php
    if(have_posts()){
    while (have_posts()){
        the_post();
        $the_title = get_the_title();
        ?>
        <h4> <?php echo $the_title ?> </h4>
        <?php
        the_category(',');
        echo '<br>';
        the_time('g:i a');
        echo '<br>';
        the_date('y/m/d');
        echo '<br>';
        the_tags('tags :',',');
        the_content(false);
        the_author();
        wp_title(' |','true');
        ?>
        <p><a href="<?php the_permalink() ?>"> more ... </a></p>
        <?php
        echo'<hr>';
            }
        posts_nav_link('||','PREVIOUS ',' NEXT ');
        }
        ?>
</body>
</html>