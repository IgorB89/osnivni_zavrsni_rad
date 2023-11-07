<?php include('header.php'); ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Create a New Blog Post</h2>

                <form action="process-post.php" method="post">
                    <div class="form-group">
                        <label for="post-title">Title</label>
                        <input type="text" class="form-control" id="post-title" name="post-title" required>
                    </div>
                    <div class="form-group">
                        <label for="post-content">Content</label>
                        <textarea class="form-control" id="post-content" name="post-content" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </form>
            </div>
        </div>
        <?php include('sidebar.php'); ?>
    </div>
</main>

<?php include('footer.php'); ?>
