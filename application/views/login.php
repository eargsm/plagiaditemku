<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login dan Jual Beli Gold, Item, Akun, dan Voucher Online Game | itemku</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/login1.css">
</head>
    <body>
        <div class="header">
            <div class="header-content">
                <a href="#">
                    <img src="<?= base_url()?>assets/img/itemku-logo.png">
                </a>
            </div>
        </div>
        <br /><br />
        <div class="container-main">
            <b><p style="text-align: center;">Ayo Bergabung dan tingkatkan safe trading sesama online gamer bersama itemku!</p></b><br />
            <div class="container login-registrasi-field">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-5 login-box">
                        <div class="title-bar">
                            <p class="login-text">Login</p>
                        </div>
                        <div class="login-content">
                            <form class="login-form" action="<?php echo site_url('c_login/aksiLogin')?>" method="post">
                                <input type="email" placeholder="Email" name="email" class="form-control"/><br />
                                <input type="password" placeholder="Password" name="password" class="form-control"/>
                                <br />
                                <a href="#"><p style="font-size: 15px; color: #077aa6;">Lupa password?</p></a>
                                <br />
                                <button type="submit" class="btn btn-login">Login</button>

                            </form>
                        </div>

                    </div>
                    <div class="col-xl-5 register-box register-box">
                        <div class="register-content">
                            <img src="<?= base_url()?>assets/img/register-icon.png">
                            <p style="font-weight: bold; font-size: 20px; color: #077aa6;">Baru di Itemku?</p>
                            <p style="font-size: 10px;">Ayo Bergabung Sekarang juga!</p>
                            <a href="<?php echo site_url() ?>/c_registrasi">
                                <div>
                                    <button  type="submit" class="btn btn-regis" >Daftar</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-1"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="something-box">
                            <a href="#">
                                <img src="<?= base_url()?>assets/img/itemku-jaminan-aman-tanpa-penipuan-login.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
