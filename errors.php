<?php include_once "init.php"; ?>
<div>
    <?php if (!empty($errors)) { ?>
        <div>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <ul><?= $error; ?></ul>
                <?php endforeach ?>
            </ul>
        </div>
    <?php } ?>
</div>