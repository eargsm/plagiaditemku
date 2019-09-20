<!DOCTYPE html>
<html>
    <head>
            <title></title>
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
                            <div class="col-xl-12">
                                <div><p class="float-left" style="font-size: 20px; font-weight: bold;">Keranjang Belanja</p></div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                                <div style="border-bottom: 1px solid #8c8b8b;"></div>
                        </div> 
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="mini-menu font-weight-bold text-primary border border-info p-2" style="background-color: #f4f7fb; font-size: 12px;">
                                <div class="d-inline pl-2">
                                    <a>Pilih Semua</a>
                                </div>
                                <div class="d-inline pl-2">
                                    <a>Ingatkan Nanti</a>
                                </div>
                                <!-- <div class="d-inline pl-2">
                                    <a>Hapus</a>
                                </div> -->
                            </div>
                            <!-- kotak untuk item keranjang-->
                            <div class="kotak-untuk-item border border-info p-2" style="background-color: #f4f7fb; margin-top: 15px; height: 400px;">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">IDKeranjang</th>
                                        <th scope="col">IDItem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($keranjang as $keranjang1) :?>
                                    <tr>
                                        <td><?=$keranjang1->idKeranjang?></td>
                                        <td><?=$keranjang1->idItem?></td>
                                        <td>
                                            <div class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                                <a style="color:red;" class=""  href="<?php echo base_url('/index.php/c_keranjang/deletekeranjang/' .$keranjang1->idKeranjang);?>">Hapus</a>
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
                            </div>
                        </div>
                        <div class="col-xl-1"></div>
                        <!-- kotak total transaksi -->
                        <div class="col-xl-4">
                            <div class="border border-info p-2 font-weight-bold" style="background-color: #f4f7fb;">
                                <div class="d-inline pl-2">
                                    <a>Total Transaksi</a>
                                </div>
                            </div>
                            <div class="border border-info p-2 ">
                                <table style="font-size: 12px;">
                                    <tr>
                                        <th scope="col">Total</th>
                                    </tr>
                                    <tbody>
                                    <?php foreach($keranjang as $keranjang1) :?>
                                    <tr>
                                        <td><?=$keranjang1->total?></td>
                                    </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                                <script>
                                $(document).ready(function(){
                                        $('#myTable').dataTable();
                                    });
                                </script>
                                <br>
                                <hr>
                                <a class="font-weight-bold" style="font-size: 15px;">Total yang harus dibayar</a>
                            </div>
                            <br>
                            <div class="btn-bayar">
                                <a href="#" class="btn btn-primary btn-block" style="background-color: #ff8200; border: 0px;">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                    
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>