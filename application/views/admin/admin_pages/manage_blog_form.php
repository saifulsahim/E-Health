<?php
//echo '<pre>';
//print_r($all_admin);
//exit();
//
//?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View All Blogs</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!--            <div class="panel-heading">-->
            <!--                DataTables Advanced Tables-->
            <!--            </div>-->
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>Blog ID</th>
                        <th>Blog Title</th>
                        <th>Blog Image</th>
                        <th>Blog Description</th>

                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach ($blog_data as $v_blog) {?>
                        <tr>
                            <td><?php echo $v_blog->blog_id?></td>
                            <td><?php echo $v_blog->blog_title?></td>
                            <td>
                                <img src="<?php echo base_url() . $v_blog->blog_image ?>" width="100" height="100">


                            </td>
                            <td><?php echo $v_blog->blog_desc?></td>

<!--                            <td>-->
<!--                                --><?php
//                                if($v_blog->cabin_status ==1){
//
//                                    echo 'Active';
//                                }
//                                elseif($v_blog->cabin_status ==2){
//                                    echo 'Inactive';
//                                }
//
//                                ?>
<!--                            </td>-->
                            <td>
<!--                                --><?php //if($v_blog->cabin_status ==1 ){?>
<!---->
<!--                                    <a href="--><?php //echo base_url("change-cabin-status/$v_blog->cabin_id/2")?><!--" class='btn btn-primary btn-sm' title="Update Status">-->
<!--                                        <i class="glyphicon glyphicon-thumbs-up"></i>-->
<!--                                    </a>-->
<!---->
<!--                                --><?php //} elseif($v_blog->cabin_status ==2) { ?>
<!---->
<!--                                    <a href="--><?php //echo base_url("change-cabin-status/$v_blog->cabin_id/1")?><!--" class='btn btn-primary btn-sm' title="Update Status">-->
<!--                                        <i class="glyphicon glyphicon-thumbs-down"></i>-->
<!--                                    </a>-->
<!---->
<!--                                --><?php //} ?>




<!--                                <a href="--><?php //echo base_url("view-cabin/$v_blog->cabin_id")?><!--" class="btn btn-warning" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>-->
                                <a href="<?php echo base_url("blog/edit_blog/$v_blog->blog_id")?>" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="<?php echo base_url("blog/delete_blog/$v_blog->blog_id")?>" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure want to delete!!')"><span class="glyphicon glyphicon-trash"></span></a>



                            </td>
                        </tr>


                    <?php }?>
                    </tbody>
                </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<script>

    function confirm_delete(){
        return confirm("Are you sure?");
    }

</script>