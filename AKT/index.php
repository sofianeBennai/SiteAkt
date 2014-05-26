<?php 

?>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mon Titre</title>
    <!-- Bootstrap -->
    <link href="./web/vendors/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div class = "navbar navbar-static-top" id="menu-top" role="navigation">
        <div class ="fill">
            <div class="container">
                <div class ="navbar-header">
                   <a href="index.php">AKT</a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="Membres.php">Membres</a></li>
                    <li><a href=".php">Login</a></li>
                </ul>
               
            </div>
        </div>
    </div>  
    
    
<div class = "container">
    <h1>Test</h1>
    <p>Test bootstrap</p>  
    

    
    
    <form>
        <p>
            <label for='email'>e-mail</label>
            <input type='text' name='email' id='email'/>
        </p>
        <p>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password'/>
        </p>
        
        <p>
            <label for='address'>Adresse:</label>
            <textarea type='text' name='address' id='address'></textarea>
        </p>
    </form>

</div>
    
    
    
    
    
<script src="web/vendors/js/angular.js"></script>
<script src="web/vendors/js/angular-translate.min.js"></script>
<script src="web/vendors/js/angular-resource.js"></script>
<script src="web/vendors/js/angular-route.js"></script>
<script src="web/vendors/js/jquery.min.js"></script>
<script src="web/vendors/js/bootstrap.js"></script>
<!--script src="web/js/application.js"></script-->
<!--script src="web/js/controllers.js"></script-->
<body>
</HTML>