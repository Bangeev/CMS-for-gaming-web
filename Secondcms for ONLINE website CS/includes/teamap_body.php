<?php include "db.php" ?>

<div id='mainbody' class='inlineContainer'>
    <div class='leftColumn borderBox news'>
        <div class='sectionHeader'>
            <h1>AngerPlay News</h1>
            <div class='menu'>
                <?php
                $query = "SELECT * FROM categories";
                $select_categories_sidebar = mysqli_query($connection, $query);


                ?>
                <ul class='submenu right'>
                    <?php

                    while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                        $cat_title =  $row['cat_title'];
                        $cat_id =  $row['cat_id'];
                        echo "<li><a href='teamap_newposts.php?category=$cat_id'>{$cat_title}</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>


        <?php
        $query = "SELECT * FROM posts";
        $select_all_posts_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_all_posts_query)){
        $post_image = $row['post_image'];
        $post_author = $row['post_author'];
        $post_title = $row['post_title'];
        $post_date = $row['post_date'];
        $post_content = $row['post_content'];
        ?>
        <article class='inlineContainer'>
            <div class='details'>
                <div class='image'>
                    <strong class='tag'>Server</strong>
                    <img src='images/<?php echo $post_image;?>' alt='preview' />
                </div>
                <a class='author borderBox ellipsis' href='#'><?php echo $post_author ?></a>
            </div>
            <div class='post borderBox'>
                <h3><a href='#'><?php echo $post_title ?></a></h3>
                <p><?php echo $post_content ?></p>
            </div>
        </article>
            <?php } ?>
        <a class='showMore borderBox' href='http://angerplay.com/viewtopic.php?f=2&t=11'>Show More News</a>
    </div>

    <?php include "teamap_sidebar.php"; ?>
    <?php include "teamap_secondaryfooter.php"; ?>

