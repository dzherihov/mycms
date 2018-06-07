<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/js/Semantic-UI/semantic.min.css">
    <title>Админ-панель</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="http://test1.ru/admin/Assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="/admin/Assets/css/dashboard.css" rel="stylesheet">
    
    <!-- simplelineicons for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    <script src="/admin/Assets/js/ckeditor/ckeditor.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <div class="container">
               
               
                <div class="ui pointing menu" id="navbarNavDropdown">
                            <div class="item">
                                  <a class="navbar-brand" href="http://test1.ru"> <?php echo Setting::get('name_site'); ?> </a>
                            </div>
                            <?php foreach (Customize::getInstance()->getAdminMenuItems() as $key => $item): ?>
                                <a class="item" href="<?= $item['urlPath'] ?>">
                                    <i class="<?= $item['classIcon'] ?>"></i>
                                        <?= $lang->dashboardMenu[$key] ?>
                                </a>
                            <?php endforeach; ?>

                            <div class="right menu">
                                <a class="item" href="/admin/logout/">
                                    <?= $lang->dashboardMenu['logout']; echo " - ".$_COOKIE["auth_login"]?>
                                    <i class="sign out icon"></i>
                                
                                </a>         
                            </div>
                
               
            </div>
        </nav>
    </header>