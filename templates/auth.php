<?php require_once('header.php');?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 "></div>
        <div class="col-lg-8 col-md-8 col-sm-8 bs-example">
            <form action="<?=$action;?>" method="post">
                <input type="hidden" name="token" value="<?= $token ?>">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control">
                </div>
                <button class="btn btn-primary">OK</button>
            </form>
            <br>
            <a href="index.php?action=account&method=register" class="btn btn-default">Register</a>
            
            <p>
                <?php
                    if(isset($error)) {
                        echo '<b>' . $error . '</b>';
                    }
                ?>
            </p>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>

<?php require_once('footer.php');
