<?php require_once('header.php');?>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1 "></div>
        <div class="col-lg-8 col-md-8 col-sm-8 bs-example">

            <form action="index.php?action=messages&method=addSave" method="post">
                <input type="hidden" name="token" value="<?= $token ?>">
                <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                <div class="form-group">
                    <label for="text">Message:</label>
                    <input type="text" name="message" id="text" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Add message</button>
            </form>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>

<?php require_once('footer.php');
