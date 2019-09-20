<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Daftar dan Jual Beli Gold, Item, Akun, dan Voucher Online Game | itemku</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/styles.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/registrasi.css">
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
            <p class="join-us">Ayo bergabung dan tingkatkan keamanan transaksi sesama online gamer bersama itemku</p>
            <div class="container login-registrasi-field">
                <div class="row">
                    <div class="col-xl-1"></div>
                    <div class="col-xl-6 login-box">
                        <div class="title-bar">
                            <p class="regis-text">Daftar Baru</p>
                        </div>
                        <div class="login-content">
                            <form class="login-form" action="<?php echo site_url() ?>/c_registrasi/tambahdata" method="post">
                                <input type="text" placeholder="Nama" name="name" class="form-control" required/><br/>
                                <input type="email" placeholder="Email" name="email" class="form-control" required/>
                                <br/>
                                <input type="password" placeholder="Password" name="password" class="form-control" required/> <br/>
                                <input type="text" placeholder="Nomor HP" name="nohp" class="form-control" required/> <br/>
                            
                            <p class="text-under-regis">Tekan "Daftar" jika anda telah menyetujui <a href="#">aturan penggunaan</a> itemku</p><br/>
                            <button type="submit" class="btn btn-daftar">Daftar</button>
                            <p class="text-under-button">sudah punya akun?<a href="<?php echo site_url()?>/c_login">Login</a></p>
                            </form>
                        </div>

                    </div>
                  <a href="">
                    <div class="col-xl-3 class="register-engagement-area">
                        <div class="register-engagement">
                            <div class="display-block">
                            <img src="" class="register-engagement-col-img" alt="">
                            <div class="register-icon-text">
                                <p class="engagement-title">Terlengkap dan Termudah</p>
                                <p class="engagement-text">
                                    Lebih dari 50 game dan jutaan produk tersedia di itemku. Termasuk barang-barang super langka dari game kesayangan kamu.
                                </p>
                            </div>
                          </div>
                         
                          <div class="display-block">
                                <img src= class="register-engagement-col-img" alt="">
                                <div class="register-icon-text">
                                    <p class="engagement-title">Lebih Murah dari yang Lain</p>
                                    <p class="engagement-text">
                                      Terbukti lebih murah dari Steam Market dan juga situs jual-beli lainnya. Ga percaya? Cek aja langsung dan bandingkan.
                                    </p>
                                </div>
                              </div>

                              <div class="display-block">
                                    <img src= class="register-engagement-col-img" alt="">
                                    <div class="register-icon-text">
                                        <p class="engagement-title">Pengiriman Cepat</p>
                                        <p class="engagement-text">
                                            Tersedia produk dengan pengiriman instan dan juga pengiriman 10 menit. Ga perlu nunggu lama lagi buat dapetin produk yang kamu beli.
                                        </p>
                                    </div>
                                  </div>
                                <div class="display-block">
                                    <img src= class="register-engagement-col-img" alt="">
                                    <div class="register-icon-text">
                                        <p class="engagement-title">Dipercaya Jutaan Gamer</p>
                                        <p class="engagement-text">
                                            Lebih dari 1 juta gamer Indonesia telah menjadi pelanggan setia di itemku. Jangan ngaku gamer kalau belum belanja di sini.
                                        </p>
                                    </div>
                                </div>
                      </div>
                    </div>
                </a>
                    <div class="col-xl-1"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
