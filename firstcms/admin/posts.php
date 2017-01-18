<?php include "includes/admin_header.php" ?>

<div id="wrapper">



    //
    <?php include "includes/admin_navigation.php" ?>

    //




    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Dashboard <small>Statistics Overview</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">


                    <?php
                    if(isset($_GET['source'])){
                        $source = $_GET['source'];

                    } else {
                        $source = '';
                    }

                    switch($source){
                        case 'add_posts';
                            include "includes/add_posts.php";
                        break;

                        case 'edit_posts';
                            include "includes/edit_posts.php";
                        break;

                        case '200';
                        echo "NICE 200";
                        break;

                        default:
                            include "includes/view_all_posts.php";
                            break;

                    }










                    ?>





        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>





<!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>
