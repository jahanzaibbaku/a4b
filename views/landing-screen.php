<!doctype html>
<html lang="en">

<?php include_once("includes/head.php")?>

<body class="home_page">

<section class="landing_scree">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="screen_inner">
                    <a href="/">
                        <img src="../assets/images/logo.png" alt="">
                    </a>
                    <h2>Hey! </h2>
                    <h3>Select Your <span>Role</span></h3>
                    <div class="role-boxes">
                        <label class="role-item">
                            <input type="radio" name="role" checked>
                            <span class="text">Agent</span>
                            <span class="dot"></span>
                        </label>

                        <label class="role-item">
                            <input type="radio" name="role">
                            <span class="text">Broker</span>
                            <span class="dot"></span>
                        </label>

                        <label class="role-item">
                            <input type="radio" name="role">
                            <span class="text">Educator</span>
                            <span class="dot"></span>
                        </label>
                        <input type="submit" value="Next">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>