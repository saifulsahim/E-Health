<?php


$message = $this->session->userdata('message');

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Blog Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open('blog/update_blog')?>

                        <div class="form-group">
                            <label>Blog Title</label>
                            <input  type="text" name="blogTitle" value="<?php echo $blog_info->blog_title?>" class="form-control" placeholder="Enter Name">
                            <input type="hidden" name="blogId" value="<?php echo $blog_info->blog_id?>" >
                        </div>






                        <div class="form-group">
                            <label>Blog Description</label>
                            <textarea name="blogDesc" rows="2" class="form-control"><?php echo $blog_info->blog_desc?></textarea>
                        </div>


                        

                        <button type="submit" class="btn btn-primary">Submit</button>

                        <?php echo form_close()?>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!--    </div>-->
<!-- /#page-wrapper -->

