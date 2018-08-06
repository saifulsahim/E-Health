<?php

echo '<pre>';

foreach ($posts as $post)
{
    ?>

    <a href="<?php echo base_url("welcome/view_blog/$post->blog_id")?>"><?php echo $post->blog_title ?></a>
    <br>

<?php
}