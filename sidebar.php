<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <?php
        $latestPostsQuery = "SELECT * FROM posts ORDER BY Created_at DESC LIMIT 5";
        $latestPostsResult = mysqli_query($yourDbConnection, $latestPostsQuery);

        echo '<ul class="list-unstyled">';
        while ($latestPost = mysqli_fetch_assoc($latestPostsResult)) {
            echo '<li><a href="single-post.php?id=' . $latestPost['Id'] . '">' . $latestPost['Title'] . '</a></li>';
        }
        echo '</ul>';
        ?>
    </div>
</aside>