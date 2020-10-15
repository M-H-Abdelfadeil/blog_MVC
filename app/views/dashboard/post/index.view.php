<?php include 'public/dashboard/inc/files_css.inc.php'?>
<?php include 'public/dashboard/inc/header.inc.php'?>
<?php include 'public/dashboard/inc/sidebar.inc.php'?>


<main class="app-content">
    <div class="card" style="width: 18rem;">
        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="<?php echo URL_SITE?>/dashboard/post/show/1" class="btn btn-primary"><i class="fa fa-asterisk"></i> Details</a>
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
