<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?= $data['title']; ?></h1>
<p><?= $data['description']; ?></p>
<p>Version: <strong><?php echo APPVERSION; ?></strong></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>