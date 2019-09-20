<!DOCTYPE html>
<html>
    <head>
            <title></title>
            <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?= base_url()?>assets/css/menu.css">
            <link rel="stylesheet" href="<?= base_url()?>assets/css/topupp.css">
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
                                <div style="float:left"><a href="
                                <?php 
                                echo site_url() 
                                ?>/c_mainmenu"><img src="<?= base_url()?>assets/img/itemku-logo.png"></a></div>
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
        <!-- MainData -->
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="display-inline-block text-top padding-15px" style="width: 290px">
                        <h1 class=" text-darkgrey">
                            <div class="text-bold text-vv-big">
                                Garansi Pengiriman 10 Menit
                            </div>
                            <div class="margin-top-10px" style="height: 165px">
                                <span class="">Produk dari penjual-penjual yang memberi Garansi Pengiriman 10 menit. Lakukan pembayaran dengan segera, dan penjual akan mengirim dalam waktu 10 menit atau kurang!<br><br>Beli sekarang, stok terbatas!</span>
                            </div>
                        </h1>
                    </div>
                    <div class="default-hover" style="height: 52px; ">
                        <h1 class=" text-darkgrey">
                        <div class="display-inline-block margin-top-20px">
                            <span class="text-bold text-orange text-center see-all-text text-middle">Lihat Semua Produk</span>
                            <img src='<?= base_url()?>assets/img/allgame-icon.png' alt="Promo Top Up Garansi Pengiriman 10 Menit" style="width: 16%;" class="text-middle">
                        </div>
                        </h1>
                    </div>
                </div>
                <div class="col-xl-8">
                <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Minimal</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">IDDagangan</th>
                                    <th scope="col">NamaToko</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($topup as $topup1) :?>
                                <tr>
                                    <td><?=$topup1->produk?></td>
                                    <td><?=$topup1->harga?></td>
                                    <td><?=$topup1->stok?></td>
                                    <td><?=$topup1->minimal?></td>
                                    <td><?=$topup1->updateDagangan?></td>
                                    <td><?=$topup1->idDagangan?></td>
                                    <td><?=$topup1->namaToko?></td>
                                    <td>
                                        <div class="btn btn-warning">
                                             <a style="color:white;" class="" href="<?php site_url() ?>c_keranjang"><img src="<?= base_url()?>assets/img/buy-button-icon.png"> Beli</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <script>
                        $(document).ready(function(){
                                $('#myTable').dataTable();
                            });
                        </script>
                    <!-- <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?= base_url()?>assets/img/ragnarok.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="text-grid-container">
                                <div class="text-title-container text-left">
                                    <p class="product-name-grid text-darkgrey text-small">
                                    200 Big Cat Coin
                                    </p>
                                </div>
                                <div style="height: 60px">
                                    <p class="text-very-big text-red text-bold">
                                        Rp 470.000
                                        <br>
                                        <span class="text-grey text-small display-block">per 1 Top Up</span>
                                    </p>
                                </div>
                                <div class="margin-5px">
                                    <center>
                                        <a class="text-medium button-highlight-wide" href="">
                                            <img src='<?= base_url()?>assets/img/buy-button-icon.png' class="display-inline-block text-middle margin-right-5px"> 
                                            <span class="text-middle display-inline-block text-medium">Beli</span>
                                        </a>
                                    </center>
                                </div> 
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <br>
        <hr>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>