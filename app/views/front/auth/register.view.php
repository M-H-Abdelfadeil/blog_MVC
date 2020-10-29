<?php include 'public/inc/header.inc.php';?>
    <section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url(<?php echo URL_SITE?>/public/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end">
                <div class="col-md-9 ftco-animate pb-5 mb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Register <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-3 bread">Register</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row block-9 justify-content-center">
                <div class="col-md-8">
                    <form action="" method="post" class="p-4 p-md-5 contact-form">
                        <?php echo "<span class='text-danger'>".$data['request']."</span>";?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input id="name"
                                           name="name"
                                           type="text"
                                           class="form-control border border-dark"
                                           value="<?php if (isset($_POST['name']))echo $_POST['name'];?>">
                                    <?php echo "<span class='text-danger'>".$data['name']."</span>";?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email"
                                           name="email"
                                           type="text"
                                           class="form-control border border-dark"
                                           value="<?php if (isset($_POST['email']))echo $_POST['email'];?>">
                                    <?php echo "<span class='text-danger'>".$data['email']."</span>";?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password"
                                           name="password"
                                           type="password"
                                           class="form-control border border-dark"
                                           value="<?php if (isset($_POST['password']))echo $_POST['password'];?>">
                                    <?php echo "<span class='text-danger'>".$data['password']."</span>";?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="confirm_password">Re Password</label>
                                    <input id="confirm_password"
                                           name="confirm_password"
                                           type="password"
                                           class="form-control border border-dark"
                                           value="<?php if (isset($_POST['confirm_password']))echo $_POST['confirm_password'];?>">
                                    <?php echo "<span class='text-danger'>".$data['confirm_password']."</span>";?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" name="register" value="Register" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include 'public/inc/footer.inc.php'?><?php
