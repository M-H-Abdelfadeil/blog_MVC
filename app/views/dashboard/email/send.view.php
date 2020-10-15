<?php include 'public/dashboard/inc/files_css.inc.php'?>
<?php include 'public/dashboard/inc/header.inc.php'?>
<?php include 'public/dashboard/inc/sidebar.inc.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-envelope-o"></i> Mailbox Send </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Emails send </a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">New Message</h3>
                <div class="tile-body">
                    <form>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input class="form-control" type="text" placeholder="Enter full name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input class="form-control" type="email" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Subject</label>
                            <input class="form-control" type="text" placeholder="Enter email address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                        </div>
                </div>
                <div class="tile-footer">
                    <button  class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-send"></i>Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Messages</h3>
                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td>
                            </td>
                            <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>8 mins ago</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td><b>A report on some good project</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>15 mins ago</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>30 mins ago</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>25 December</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></i></td>
                            <td>20 December</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>20 December</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><a href="#"><i class="fa fa-star"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></i></td>
                            <td>20 December</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="#"><i class="fa fa-star-o"></i></a></td>
                            <td><a href="read-mail.html">John Doe</a></td>
                            <td class="mail-subject"><b>A report on project almanac</b> - Lorem ipsum dolor sit amet adipisicing elit...</td>
                            <td></td>
                            <td>20 December</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'public/dashboard/inc/footer.inc.php'?>
</body>
</html>