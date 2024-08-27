<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<?=@$metkey;?>" />
    <meta name="description" content="<?=@$metdesc;?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=@$title;?></title>
    <!--Favicon--> 
    <link href="<?=base_url('/favicon.ico');?>" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <!-- LOAD CSS -->
    <?= $this->renderSection("css"); ?>
</head>
<body>
<?= view('theme/revolve/header') ?>

<!-- Content Wrapper. Contains page content -->
<?= $this->renderSection("content"); ?>

<?= view('theme/revolve/footer') ?>
</body>
</html>
