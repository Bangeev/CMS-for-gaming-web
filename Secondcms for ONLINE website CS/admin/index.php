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
                            welcome to admin



<!--                            <small>--><?php //echo $_SESSION['username'] ?><!--</small>-->
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
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">

                                        <?php
                                            $query = "SELECT * FROM posts";
                                            $select_all_post = mysqli_query($connection, $query);
                                            $post_count = mysqli_num_rows($select_all_post);
                                             echo "<div class='huge'>{$post_count}</div>";



                                        ?>

                                        <div>Posts</div>
                                    </div>
                                </div>
                            </div>
                            <a href="posts.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM comments";
                                        $select_all_comments = mysqli_query($connection, $query);
                                        $comment_count = mysqli_num_rows($select_all_comments);
                                        echo "<div class='huge'>{$comment_count}</div>";



                                        ?>
                                        <div>Comments</div>
                                    </div>
                                </div>
                            </div>
                            <a href="comments.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM users";
                                        $select_all_users = mysqli_query($connection, $query);
                                        $user_count = mysqli_num_rows($select_all_users);
                                        echo "<div class='huge'>{$user_count}</div>";



                                        ?>
                                        <div>Users</div>
                                    </div>
                                </div>
                            </div>
                            <a href="users.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-list fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <?php
                                        $query = "SELECT * FROM categories";
                                        $select_all_categories = mysqli_query($connection, $query);
                                        $category_count = mysqli_num_rows($select_all_categories);
                                        echo "<div class='huge'>{$category_count}</div>";



                                        ?>
                                        <div>Categories!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="categories.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <?php

                $query = "SELECT * FROM posts WHERE post_status = 'draft'";
                $select_all_draft_post = mysqli_query($connection, $query);
                $post_draft_count = mysqli_num_rows($select_all_draft_post);

                $query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
                $unapprove_comments_query = mysqli_query($connection, $query);
                $unapprove_comment_count = mysqli_num_rows($unapprove_comments_query);

                $query = "SELECT * FROM users WHERE user_role = 'subscriber'";
                $select_all_subscribers = mysqli_query($connection, $query);
                $subscriber_count = mysqli_num_rows($select_all_subscribers);




                ?>







                <div class="row">
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['bar']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Date', 'Count'],

                                <?php


                                    $elements_text = ['Active Post', 'Draft Posts', 'Comments', 'Pending Comments','Users', 'Subscribers', 'Categories'];
                                $elements_count = [$post_count, $post_draft_count, $comment_count, $unapprove_comment_count, $user_count, $subscriber_count, $category_count];
                                for ($i =0; $i < 7; $i++){
                                    echo "['{$elements_text[$i]}'" . " ," . "{$elements_count[$i]}],";

                                }







                                ?>








                            ]);

                            var options = {
                                chart: {
                                    title: '',
                                    subtitle: '',
                                }
                            };

                            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                            chart.draw(data, options);
                        }
                    </script>

                    <div id="columnchart_material" style="width: 1000px; height: 400px;"></div>


                </div>



            </div>
            <!-- /.container-fluid -->

        </div>





        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php" ?>
