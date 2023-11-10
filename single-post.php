<?php include('header.php'); ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php
            $postId = $_GET['id'];
            $postQuery = "SELECT * FROM posts WHERE Id = $postId";
            $postResult = mysqli_query($yourDbConnection, $postQuery);
            $post = mysqli_fetch_assoc($postResult);
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $post['Title']; ?></h2>
                <p class="blog-post-meta"><?php echo $post['Created_at']; ?> by <?php echo $post['Author']; ?></p>
                <p><?php echo $post['Body']; ?></p>
                <hr>

                <h3>Comments</h3>
                <ul>
                    <?php
                    $commentsQuery = "SELECT * FROM comments WHERE Post_id = $postId";
                    $commentsResult = mysqli_query($yourDbConnection, $commentsQuery);

                    while ($comment = mysqli_fetch_assoc($commentsResult)) {
                        echo '<li><strong>' . $comment['Author'] . ':</strong> ' . $comment['Text'] . '</li>';
                        echo '<hr>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <?php include('sidebar.php'); ?>
    </div>
</main>

<?php include('footer.php'); ?>
