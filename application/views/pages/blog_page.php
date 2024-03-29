<?php

//echo $post->blog_title;
//echo '<br>';
//echo $post->blog_desc;
//echo '<br>';
//echo $post->blog_view;

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>asset/blog_asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url() ?>asset/blog_asset/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>asset/blog_asset/css/clean-blog.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('welcome/manage_blog') ?>">Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('welcome/manage_blog') ?>">Home</a>
                </li>


                <?php if ($this->session->userdata('admin_id')) { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('welcome/main_logout') ?>">Sign Out</a>
                    </li>

                <?php } else { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('blog/add_user_sign_in') ?>">Sign In</a>
                    </li>

                <?php }

                $user = $this->blog_model->get_record($post->admin_id);

                ?>


                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="about.html">About</a>-->
                <!--                </li>-->
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="post.html">Sample Post</a>-->
                <!--                </li>-->
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link" href="contact.html">Contact</a>-->
                <!--                </li>-->
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header>


    <div class="overlay">
<!--        <div class="view-product">-->
<!--            <img src="--><?php //echo base_url() . $post->blog_image ?><!--" width="100%" height="500" alt=""/>-->
<!--        </div>-->

        <div class="view-product" style="background-image: url('<?php echo base_url() . $post->blog_image ?>');">
<!--            <img src="--><?php //echo base_url() . $post->blog_image ?><!--" width="100%" height="500" alt=""/>-->

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">


                    <h1><?php echo $post->blog_title ?></h1>
                    <h2 class="subheading"></h2>
                    <h5><span class="meta">Posted by
                <a href="#"><?php echo $user->admin_name ?></a>
                            <?php echo $post->blog_date ?></span></h5>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">


                <?php
                echo $post->blog_title;
                echo '<br>';
                echo $post->blog_desc;
                echo '<br>';


                //                echo '<br>';
                //                echo $post->blog_view;
                ?>


                <hr>


                <?php if ($this->session->userdata('admin_id')) { ?>

                    <?php echo form_open('blog/save_comments') ?>

                    <div class="form-group">
                        <label>Comments</label>
                        <textarea name="comments" rows="2" class="form-control"></textarea>
                    </div>

                    <input type="hidden" name="blogId" value="<?php echo $post->blog_id ?>">

                    <button type="submit" class="btn btn-primary">Submit</button>

                    <div class="comments-area">
                        <h3 class="comments-title">Comments</h3>
                        <?php
                        foreach ($all_comments as $comments):
                            $user = $this->blog_model->get_record($comments->admin_id);
//                        $cdate = DateTime::createFromFormat('Y-m-d', $comment->date);
//                        $cday = $date->format('d');
//                        $cmonth = $date->format('F');
//                        $cyear = $date->format('Y');
                            ?>
                            <ol class="comment-list">
                                <li>
                                    <article>
                                        <div class="comment-meta">
                                            <div class="comment-author-metadata">
                                                <h4><a href="#"><?= $user->admin_name; ?></a></h4>
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        at
                                                        <?= $comments->post_date; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-content">
                                            <p>
                                                <?= $comments->message; ?>
                                            </p>
                                        </div>
                                    </article>
                                </li>
                            </ol>
                        <?php endforeach; ?>


                    </div>

                    <?php echo form_close() ?>

                <?php } else { ?>

                    Please Login to <a
                            href="<?php echo base_url("blog/add_user_sign_in?r=welcome/view_blog/$post->blog_id") ?>">comment</a>

                <?php } ?>


                <p>This Blog is viewed by total
                    <?php echo $post->blog_view; ?> times
                    <!--                    <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>-->
            </div>
        </div>
    </div>
</article>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url() ?>asset/blog_asset/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asset/blog_asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url() ?>asset/blog_asset/js/clean-blog.min.js"></script>

</body>

</html>

