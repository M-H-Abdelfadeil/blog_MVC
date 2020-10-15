<?php include 'public/dashboard/inc/files_css.inc.php'?>
<?php include 'public/dashboard/inc/header.inc.php'?>
<?php include 'public/dashboard/inc/sidebar.inc.php'?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users mr-1"></i>Users</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item active"><a href="#">Users</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Count Posts</th>
                                <th>Count Comments</th>
                                <th>Date</th>
                                <th>Verify Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="<?php echo URL_SITE?>/dashboard/user/show/1">Tiger Nixon</a>
                                </td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>
                                    <div class="toggle-flip">
                                        <label>
                                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo URL_SITE?>/dashboard/user/show/1">Tiger Nixon</a>
                                </td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>
                                    <div class="toggle-flip">
                                        <label>
                                            <input type="checkbox"><span class="flip-indecator" data-toggle-on="ON" data-toggle-off="OFF"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'public/dashboard/inc/footer.inc.php'?>
<script type="text/javascript" src="<?php echo URL_SITE?>/public/dashboard/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo URL_SITE?>/public/dashboard/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
