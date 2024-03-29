<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $this->siteTitle(); ?></title>
    <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/custom.css">
    <script src="<?= PROOT ?>js/jquery-3.4.1.js"></script>
    <script src="<?= PROOT ?>js/bootstrap.js"></script>

    <?= $this->content('head'); ?>

</head>
<body>

<?= $this->content('body'); ?>

</body>
</html>