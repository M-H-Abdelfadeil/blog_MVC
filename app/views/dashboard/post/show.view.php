<?php include 'public/dashboard/inc/files_css.inc.php'?>
<?php include 'public/dashboard/inc/header.inc.php'?>
<?php include 'public/dashboard/inc/sidebar.inc.php'?>


<main class="app-content">
    <div class="card mb-3">
        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <h5 class="card-title">User : <a href="<?php echo URL_SITE?>/dashboard/user/show/1">mahmoud</a></h5>
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-between mt-3">
                <div>
                    <a href="#">
                        <i class="fa fa-fw fa-lg fa-comment-o"></i>
                        5 Comments
                    </a>
                </div>
                <div>
                    <i class="fa fa-fw fa-lg fa-trash text-danger"></i>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'public/dashboard/inc/footer.inc.php'?>


</body>
</html>
