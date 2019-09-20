<!DOCTYPE html>
<html>
    <head>
            <title></title>
            <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?= base_url()?>assets/css/menu.css">
    </head>
    <body>
   <div class="header">
                <div class="container">
                        <div class="row">
                                <div class="col-xl-12">
                                   <a href="<?php echo site_url() ?>/c_login/logOut"><p>Logout</p></a> 
                                    <p>Tanya Jawab</p>
                                    <p>Promo</p>
                                    <p>Mystery Box</p>
                                    <a href="<?php echo site_url()?>/c_registoko"><p>Daftar Toko</p></a>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div style="float:left"><img src="<?= base_url()?>assets/img/itemku-logo.png"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="divheader"><img src="<?= base_url()?>assets/img/profile.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/buy-history.png"></div>
                                <div class="divheader"><a href="
                                <?php 
                                   echo site_url()
                                ?>/c_dagangan"><img src="<?= base_url()?>assets/img/shop.png"></a> </div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/inbox.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/wishlist.png"></div>
                                <div class="divheader"><a href="
                                <?php 
                                echo site_url() 
                                ?>/c_keranjang"><img src="<?= base_url()?>assets/img/cart.png"></a></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/dompetku.png"></div>
                                <div class="divheader"><img class="boosting" src="<?= base_url()?>assets/img/boosting-icon-dota.png"></div>
                                <div class="divheader"><img class="boosting" src="<?= base_url()?>assets/img/boosting-icon.png"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div>
                                <div class="d-inline headerbawah">
                                <div class="d-inline headerbawah"><a href="<?php echo site_url() ?>/c_topup">Top Up & Voucher</a></div>
                                <div class="d-inline headerbawah">Item & Skin</div>
                                <div class="d-inline headerbawah">Gold & Currency</div>
                                <div class="d-inline headerbawah">Akun</div>
                                <div class="d-inline headerbawah">Game Key</div>
                                <div class="d-inline headerbawah">Pulsa</div>
                                <div class="d-inline headerbawah">Mystery Box</div>
                            </div>
                        </div>
                </div>
            </div>         
            <br>
            <hr>
            <br>
            <!-- main -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 line">
                        <p class="pmain">LINE kamu belum di Verifikasi? Ayo masuk ke LINE agar mendapat notifikasi pesanan dari Itemku </p>  
                    </div>
                </div>
                <br>
                <div class="row">
                    <!-- ini buat karosel -->
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-12 textsearch" style="text-align:center;">
                        Mau Belanja Game Apa?
                    </div>
                </div>
                <div class="row" style="padding-left:375px;">
                    <div class="searchbox">
                        <p style="float:left; font-size:14px; padding-top:12px;">Mobile Legend, PUBG Mobile, DOTA2...</p>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-xl-12 textsearch" style="text-align:center;">
                        Kenapa Harus Belanja di Itemku?
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-dota-cheap.png"></div>
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-ml-antihb.png"></div>
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-voucher-qb.png"></div>
                </div>
                <div class="row">
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-gt-dl.png"></div>
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-dota-gift.png"></div>
                    <div class="catalog"><img class="catalogimg" src="<?= base_url()?>assets/img/catalog-ml-diamonds.png"></div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>