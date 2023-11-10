<?php include('header.php'); ?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">Sample Blog Post</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
                <p>This is a sample blog post with comments.</p>

                <!-- Komentari -->
                <div class="comments">
                    <h3>Comments</h3>
                    <ul>
                        <li>
                            <div class="comment-meta">Posted by <a href="#">John</a> on February 5, 2014</div>
                            <p>This is the first comment on the post.</p>
                        </li>
                        <li>
                            <div class="comment-meta">Posted by <a href="#">Jane</a> on February 10, 2014</div>
                            <p>Here's another comment on the same post.</p>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default" id="toggleComments">Hide comments</button>
            </div>
        </div>
        <?php include('sidebar.php'); ?>
    </div>
</main>

<?php include('footer.php'); ?>
