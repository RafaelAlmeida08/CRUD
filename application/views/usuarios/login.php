<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>/assets/css/meucss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>

</head>
<body>

<div class="login" style="margin-top:100px">
        <div class="container">
                <div class="logo">
                    <img src="<?=base_url();?>assets/img/logo.png">
                </div>
                <div class="form-login ajustaform   " action="<?php echo site_url('index.php/login_controller/entrar');?>" method="post">
                    <form>
                        <div class="form-group form-inline">
                            <label for="exampleInputEmail1 col-xs-2">Email:</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        </div>
                        <div class="form-group form-inline">
                            <label for="exampleInputPassword1">Senha:</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                        </div>
                        <div class="botao-login">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>     
        </div>
</div>

</body>
</html>