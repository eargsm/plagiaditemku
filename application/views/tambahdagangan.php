<!DOCTYPE html>
<html>
    <head>
            <title>Dagangan Baru | itemku</title>
            <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?php echo base_url()?>assets/css/menu.css">
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
                                <div style="float:left"><img src="<?= base_url()?>assets/img/itemku-logo.png"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="divheader"><img src="<?= base_url()?>assets/img/profile.png"></div>
                                <div class="divheader"><img src="<?= base_url()?>assets/img/buy-history.png"></div>
                                <div class="divheader"><a href="<?php echo site_url()?>/c_registoko"><img src="<?= base_url()?>assets/img/shop.png"></a> </div>
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
                                <div class="d-inline headerbawah">Top Up & Voucher</div>
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
            <!-- main -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="d-inline float-left">Home</p>
                        <p class="d-inline float-left"">></p>
                        <p class="d-inline float-left">Tokoku</p>
                        <p class="d-inline float-left"">></p>
                        <p class="d-inline float-left">Dagangan</p>
                        <p class="d-inline float-left"">></p>
                        <p class="d-inline float-left font-weight-bold">Bikin Dagangan Baru</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 rounded" style="background-color: #f5f5f5;">
                        <p class="float-left" style="color: #828282; font-size: 14px;">Kontak tidak boleh dimasukkan ke deskripsi dagangan</p>
                        <div class="btn btn-primary float-right" style="background-color: #087aa6;">Panduan Penjual</div>
                    </div>
                </div>
                <br>
                <div class="row border-bottom" style="border-color: #087aa6; border-style: ">
                    <p class="font-weight-bold" style="font-size: 20px; color: #087aa6;">Dagangan Baru</p>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="font-weight-bold d-inline float-left" style="font-size: 15px;">Informasi Produk</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <form action="<?php echo site_url() ?>/c_tambahdagangan/tambahitem" method="POST">
                            <input class="form-control" type="text" name="namaitem" placeholder="Nama Item" required>
                            <p>*pilih atau tambahkan nama item dari lis yang muncul dengan teliti. Jika tidak, admin dapat mengubahnya tanpa pemberitahuan.</p>
                            <br>
                            <br>
                            <input class="form-control" type="text" name="harga" placeholder="Harga" required>
                            <p>*harga harus kelipatan 100 <br>
                                Jumlah harga yang kamu masukkan akan dipotong biaya itemku Safe Trading sebesar 2%</p>
                            <br>
                            <br>
                            <input class="form-control" type="text" name="stok" placeholder="Stok" required>
                            <br>
                            <br>
                            <input class="form-control" type="text" name="minpesanan" placeholder="Minimal Pesanan" required>
                            <br>
                            <br>
                            <input type="submit" value="Kirim" class="btn btn-primary" style="background-color: #ff8901; border: 0px;">
                        </form>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>