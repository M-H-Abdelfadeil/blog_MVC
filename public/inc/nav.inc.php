<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">B<span>LO</span>G</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?php echo URL_SITE?>" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="<?php echo URL_SITE.'/post/all'?>" class="nav-link">Posts</a></li>
                <li class="nav-item"><a href="<?php echo URL_SITE.'/contact'?>" class="nav-link">Contact</a></li>
                <?php
                if (isset($_SESSION['user'])){
                    ?>
                    <li class="nav-item"><a href="<?php echo URL_SITE.'/auth/logout'?>" class="nav-link">Logout</a></li>
                    <li class="nav-item"><a href="<?php echo URL_SITE.'/profile'?>" class="nav-link text-light"><i class="fa fa-user mr-2"></i><?php echo $_SESSION['user']['name']?></a></li>
                    <?php
                }else{
                   ?>
                    <li class="nav-item"><a href="<?php echo URL_SITE.'/auth/login'?>" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="<?php echo URL_SITE.'/auth/register'?>" class="nav-link">Register</a></li>
                    <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->