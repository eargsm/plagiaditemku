<!DOCTYPE html>
<html>
    <head>
            <title></title>
            <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="<?php echo base_url()?>assets/css/dagangan.css">
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
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/profile.png"></div>
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/buy-history.png"></div>
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/shop.png"></div>
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/inbox.png"></div>
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/wishlist.png"></div>
                                <div class="divheader"><img src="<?php echo base_url()?>assets/img/dompetku.png"></div>
                                <div class="divheader"><img class="boosting" src="<?php echo base_url()?>assets/img/boosting-icon-dota.png"></div>
                                <div class="divheader"><img class="boosting" src="<?php echo base_url()?>assets/img/boosting-icon.png"></div>
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
            <div class="container">
            <div class="content-container-no-padding">
                    <div class="height-controller">
                        <div class="menu-container">
                            <div class="top-title">
                                <img src="https://files.itemku.com/images/tokoku-icon.png" class="menu-icon">
                                <span class="menu-text text-darkblue text-bold text-15px">Tokoku</span>
                            </div>
                            <a href='#'>
                                <div id="product_list" class="sub-menu">
                                    <span class="sub-menu-text">Dagangan</span>
                                </div>
                            </a>
                        
                            <a href='#'>
                                <div id="order_history" class="sub-menu">
                                    <span class="sub-menu-text">Riwayat Pesanan </span>
                                                    </div>
                            </a>
                
                            <a href='#'class="position-relative">
                                <div id="balance" class="sub-menu">
                                    <span class="sub-menu-text">Saldo</span>
                                </div>
                            </a>
                
                                        <a href='#'class="position-relative">
                                <div id="shop_point" class="sub-menu">
                                    <span class="sub-menu-text">Poin Toko</span>
                                </div>
                            </a>
                                            <a href='#'>
                                <div id="edit_shop" class="sub-menu">
                                    <span class="sub-menu-text">Pengaturan Toko </span>
                                </div>
                            </a>
                <!-- <div class="row">
                    <div class="col-xl-2 font-weight-bold" style="background-color: #f5f5f5; height: 500px;">
                        <br>
                        <div class="d-flex justify-content-center" style="background-color: #e5e5e5;">
                            <p style="font-size: 18px; color: #087aa6;">Tokoku</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p style="font-size: 15px; color: #6c6e71;">Dagangan</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p style="font-size: 15px; color: #6c6e71; text-align: center;">Riwayat Pesanan</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p style="font-size: 15px; color: #6c6e71;">Saldo</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p style="font-size: 15px; color: #6c6e71;">Poin Toko</p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <p style="font-size: 15px; color: #6c6e71;">Pengaturan Toko</p>
                        </div>                         -->
                    </div>
                    <div class="col-xl-10">
                        <center>
                            <div><img src="<?php echo base_url()?>assets/img/attention.png"></div>
                        </center>
                        <p class="font-weight-bold float-left" style="color: #087aa6; font-size: 18px;">Dagangan</p>
                        <br>
                        <!-- <div class="btn btn-primary float-right" style="background-color: #ff8200; border: 0px;"><a href=""></a>Dagangan Baru</div> -->
                        <br>
                        <br>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Produk</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Minimal</th>
                                    <th scope="col">Update</th>
                                    <th scope="col"> 
                                       <div class="btn btn-primary">
                                            <a style="color:white;" class="" href="<?php site_url() ?>c_tambahdagangan">Dagangan Baru</a>
                                       </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($dagangan as $dagangan1) :?>
                                <tr>
                                    <td><?=$dagangan1->produk?></td>
                                    <td><?=$dagangan1->harga?></td>
                                    <td><?=$dagangan1->stok?></td>
                                    <td><?=$dagangan1->minimal?></td>
                                    <td><?=$dagangan1->updateDagangan?></td>
                                    <td>
                                        <div class="btn btn-primary">
                                             <a style="color:white;" class="" href="<?php site_url() ?>c_editdagangan">Edit</a>
                                        </div>
                                        <div class="btn btn-warning" onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                            <a style="color:white;" class=""  href="<?php echo base_url('/index.php/c_dagangan/deletedagangan/' .$dagangan1->idDagangan);?>">Hapus</a>
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
            </div>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>                              </div>        
    </body>
</html>        
