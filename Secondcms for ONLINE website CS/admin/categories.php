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
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">

                </div>
                <div class="col-lg-3 col-md-6">

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">


                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="details">





                    <div class="col-lg-4">
                    <?php insert_categories(); ?>









                    <form action="" method="post">
                    <div class="form-group">
                        <label for="cat_title">Add Category</label>
                        <input type="text" class="form-control" name="cat_title">
                    </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                        </div>
                    </form>
                        <?php
                        // update and include
                        if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";
                        }
                        ?>
                    </div>
                     <div class="col-xs-6">


                         <table class="table table-bordered table-hover">
                             <thead>
                             <tr>
                                <th>ID</th>
                                <th>Category Title</th>
                             </tr>
                             </thead>
                            <tbody>

                                <?php // FIND ALL CATEGORIES QUERY
                                findAllCategories();
                                ?>
                            <?php deleteCategories(); ?>









                            </tbody>
                         </table>

                     </div>


                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>





    <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
