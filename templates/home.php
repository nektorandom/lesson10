<?php require_once('header.php');?>

<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="text-right">
                <p>Hello, <?= $user_name; ?></p>
                <a href="index.php?action=account&method=logout">Logout</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="pull-left">
                <h2>Messages</h2>
            </div>
            <div class="text-right">
                <a href="index.php?action=messages&method=add">Add new message</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
    <div class="row">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>
        <div class="col-lg-8 col-md-8 col-sm-8">
            <ul class="list-unstyled">
                <?php foreach($messages AS $post): ?>
                    <li style="padding-bottom:10px;">
                        <div class="bg-success" style="padding: 10px;">
                            <div>
                                Message: <?= htmlspecialchars($post['message']); ?>
                            </div>
                            <div>
                                Date: <?= date('d.m.Y H:i', strtotime($post['datetime'])); ?>
                            </div>
                            <div>
                                User: <?= $post['user_name'] ; ?>
                            </div>
                            <a href="index.php?action=messages&method=edit&id=<?= $post['id'] ?>">Edit</a>
                            <a href="index.php?action=messages&method=delete&id=<?= $post['id'] ?>">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>

            <ul id="pages">
                <?php if($page > 1):?>
                    <li><a href="index.php?action=home&method=index&page=<?=$page-1;?>" class="btn btn-default"><</a></li>
                <?php endif;?>

                <li class="btn btn-default"><?=$page;?></li>

                <?php if($page < $total):?>
                    <li><a href="index.php?action=home&method=index&page=<?=$page+1;?>" class="btn btn-default">></a></li>
                <?php endif;?>
            </ul>

        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>

<?php require_once('footer.php');
