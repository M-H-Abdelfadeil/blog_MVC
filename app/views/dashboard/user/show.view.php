<?php include 'public/dashboard/inc/files_css.inc.php'?>
<?php include 'public/dashboard/inc/header.inc.php'?>
<?php include 'public/dashboard/inc/sidebar.inc.php'?>


    <main class="app-content">
        <div class="row user">
            <div class="col-md-12">
                <div class="profile">
                    <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
                        <h4>John Doe</h4>
                        <p>FrontEnd Developer</p>
                    </div>
                    <div class="cover-image"></div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Comments</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="user-timeline">
                        <div class="timeline-post">
                            <p class="text-muted"><small>2 January at 9:30</small></p>

                            <div class="post-content">
                                <h4 class="text-dark"><a href="#">Title</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <ul class="post-utility">
                                <li><a href="#"  class="text-danger"><i class="fa fa-fw fa-lg fa-trash"></i>Delete</a></li>
                                <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> <a href="#">5 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-settings">
                        <div class="tile user-settings">
                            <h4 class="line-head">Comments</h4>
                            <div class="timeline-post">
                                <h4 class="text-dark"><a href="#">Title</a></h4>
                                <p class="text-muted"><small>2 January at 9:30</small></p>

                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <ul class="post-utility">
                                    <li><a href="#"  class="text-danger"><i class="fa fa-fw fa-lg fa-trash"></i>Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php include 'public/dashboard/inc/footer.inc.php'?>