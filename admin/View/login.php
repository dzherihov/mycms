<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Login to CMS</title>

    <!-- Bootstrap core CSS 
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="../Assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/admin/Assets/js/Semantic-UI/semantic.min.css">
    <script src="/admin/Assets/js/Semantic-UI/semantic.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>



<div style="width: 20%; margin-top: 5%" class="ui container">
    <div class="ui cards">
        <div class="card">
            <div class="content">
                <img class="right floated medium ui image" src="../Assets/img/logo.png">
                <div class="header">
                    Login to CMS
                </div>
                <div class="meta">
                    Admin panel
                </div>
                <div class="description">
                    <form class="ui form" role="form" method="POST" action="/admin/auth/">
                        <div class="field">
                            <div class="ui left icon input">
                                <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                                <i class="mail icon"></i>
                        </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                <i class="lock icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">                
                                <input type="checkbox" type="name" value="remember-me"> 
                                <label class="checkbox">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="ui horizontal divider ">
                            <div class="ui two buttons">
                                <button class="ui button" type="submit">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
</body>
</html>