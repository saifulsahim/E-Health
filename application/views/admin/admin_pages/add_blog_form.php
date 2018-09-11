<?php


$message = $this->session->message;

if (isset($message)) {

    echo $message;
    $this->session->unset_userdata('message');
}

?>

<?php //echo validation_errors()?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Blog Form</h1>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!--                        <form role="form">-->
                        <?php echo form_open_multipart('blog/save_blog')?>



                        <div class="form-group">
                            <label>Blog Title</label>
                            <input type="text" name="blogTitle"  class="form-control" placeholder="Enter Title" required>
                        </div>

                        <div class="form-group">
                            <label>Blog Image</label>
                            <input type="file" class="form-control" name="blogImage" value="" class="input-file uniform_on" id="fileInput">
                        </div>



                        <div class="form-group">
                            <label>Blog Description</label>
                            <textarea name="blogDesc" rows="2" class="form-control"></textarea>
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

