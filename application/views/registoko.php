<!DOCTYPE html>
<html>
    <head>
            <title></title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?php echo base_url()?>assets/css/registoko.css">
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
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                            <div style="float:left"><a href="
                                <?php 
                                echo site_url() 
                                ?>/c_mainmenu"><img src="<?= base_url()?>assets/img/itemku-logo.png"></a></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="divheader"><img src="<?= base_url()?>assets/img/profile.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/buy-history.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/shop.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/inbox.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/wishlist.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/dompetku.png"></div>
                                <div class="divheader"><img class="boosting" src="<?= base_url()?>assets/img/boosting-icon-dota.png"></div>
                                <div class="divheader"><img class="boosting" src="<?= base_url()?>assets/img/boosting-icon.png"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div>
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
                    <div class="col-xl-3">
                        <div>Tokoku</div>
                        <div>Pengaturan Toko</div>
                    </div>
                    <div class="col-xl-9">
                        <div class="line">
                           <p class="pmain">Mengikuti panduan penjual di jamin menjadi penjual hebat di itemku</p> 
                        </div>
                        <br>
                        <div>
                            <p class="textsearch" style="float : left;">Pengaturan Toko</p>
                            <br>
                            <hr>
                        </div>
                        <div class="bukatoko">
                            <span class="textbukatoko" style="padding-left:20px;">Buka Toko Kamu di Itemku</span>
                            <br>
                            <span class="text-darkgrey" style="padding-left : 20px; font-size :14px;">
                                Harap isi terlebih dahulu form di bawah ini untuk memulai dagangan.
                            </span>
                            <br>
                            <span class="text-darkgrey" style="padding-left:20px; font-size:14px;">
                                Data kamu adalah rahasia dan tidak akan kami beritahukan kepada pihak ketiga.</span>
                        </div>
                        <br>
                        <div>
                                <form class="login-form" action="<?php echo site_url() ?>/c_registoko/tambahtoko" method="post">
                                    <input type="text" placeholder="Nama Toko" name="namatoko" class="form-control" required/><br/>
                                    <input type="text" placeholder="Bank" name="bank" class="form-control" required/><br/>
                                    <input type="text" placeholder="Atas Nama" name="atasnama" class="form-control" required/> <br/>
                                    <input type="text" placeholder="Nomor Rekening" name="norek" class="form-control" required/> <br/>
                                    <input type="text" placeholder="Slogan Toko" name="slogan" class="form-control" required/> <br/>
                                    <button type="submit" class="btn btn-primary">Buka Toko Sekarang</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>