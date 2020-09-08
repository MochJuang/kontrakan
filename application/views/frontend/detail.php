<div class="breadcrumb-area section" style="background-image: url(<?php echo base_url() ?>assets/front/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Properties Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo $kontrakan  ?></li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->
    
<!-- Page Conttent -->
<main class="page-content section"> 
   
    <!-- Featured Properites Start -->   
    <div class="properites-sidebar-wrap pt-80 pt-md-60 pt-sm-40 pt-xs-30 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-12 order-lg-2 order-2">
                    <div class="row widgets">
                       
                        <div class="col-lg-12">
                            <div class="single-widget widget-search">
                                <h4 class="widget-title">
                                    <span>Gambar</span>
                                </h4>
                                <div class="search-wrap sidebar-wigets-search">
                                    <form action="#">
                                        <div class="row row-10">
                                            <?php foreach ($data['gambar'] as $key => $value): ?>
                                                <div class="col-12 mb-20">
                                                    <img src="<?php echo base_url() ?>assets/upload/<?php echo $value['gambar'] ?>" alt="">
                                                </div>
                                            <?php endforeach ?>

                                            <div class="col-lg-12 col-md-6 col-12 mb-20">
                                                <div class="serche-input-box  ml-auto mr-auto text-center">
                                                    <a href="<?php echo base_url() ?>home/detail_gambar/<?php echo $data['id_kontrakan'] ?>" class="btn">Semua Gambar</a>
                                                </div>
     f                                       </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-widget widget">
                                <h4 class="widget-title">
                                    <span>Pemilik</span>
                                </h4>
                                <div class="row single-propertiy-wigets">
                                    <div class="col-lg-12 col-md-6 single-propertiy mb-30">
                                        <a href="#"><img src="<?php echo base_url() ?>/assets/foto_profile/<?php echo $data['data_pemilik']['foto'] ?>" alt=""></a>
                                        <div class="propertiy-det-box">
                                            <h4><?php echo $data['data_pemilik']['nama'] ?></h4>
                                            <h4><?php echo $data['data_pemilik']['email'] ?></h4>
                                            <h4><?php echo $data['data_pemilik']['hp'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9 col-12 order-lg-1 order-1">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-warpper">
                                <div class="details-image mt-30">
                                    <img src="<?php echo base_url() ?>/assets/upload/<?php echo $data['foto'] ?>" alt="">
                                </div>
                                <div class="details-contents-wrap">
                                   
                                    <h3><?php echo $data['nama_kontrakan'] ?></h3>

                                    <h4>Deskripsi</h4>
                                    
                                    <p>
                                        <?php echo $data['deskripsi'] ?>
                                    </p>
                                    
                                    
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                           
                                            <div class="col-12">
                                                <div class="properties-details-title mb-10">
                                                    <h4>Kondisi</h4>
                                                </div>
                                            </div>
                                            
                                            <div class=" col-sm-6">
                                                <div class="single-info">
                                                    <strong>Lokasi :</strong><span> <?php echo $data['lokasi'] ?></span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="single-info">
                                                    <strong>Harga :</strong><span>Rp. <?php echo number_format($data['harga'],0,',','.').'/'.type($data['type']) ?></span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="single-info">
                                                    <strong>Luas :</strong><span> <?php echo $data['luas_kamar'] ?></span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="single-info">
                                                    <strong>Kategori :</strong><span> <?php echo $data['kategori'] ?></span>
                                                </div>
                                            </div>
                                            <div class=" col-sm-6">
                                                <div class="single-info">
                                                    <strong>Listrik :</strong><span> <?php echo ($data['listrik']) ? 'Sudah' : 'Tidak'; ?> Termasuk Listrik</span>
                                                </div>
                                            </div>
                                            <!-- dfasd -->
                                        </div>
                                    </div>
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                           
                                            <div class="col-12">
                                                <div class="properties-details-title mb-10">
                                                    <h4>Fasilitas</h4>
                                                </div>
                                            </div>
                                            <?php foreach ($data['fasilitas'] as $key => $value): ?>
                                                
                                                <div class="col-md-4 col-sm-6">
                                                    <div class="single-info">
                                                        <span><span class="fa fa-lg  <?php echo $value['icon'] ?>"> <?php echo $value['fasilitas'] ?></span></span>
                                                    </div>
                                                </div>

                                            <?php endforeach ?>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="comments-area pt-70 pt-md-50 pt-sm-50 pt-xs-50">
                                    <h4>Comments</h4>
                                    
                                    <ul class="comment-list">
                                        <li>
                                            <div class="comment">
                                                <div class="image"><img src="assets/images/review/01.png" alt=""></div>
                                                <div class="content">
                                                    <h5>Luci Chunni</h5>
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <span class="time">6 hour ago</span>
                                                    </div>
                                                    <div class="decs">
                                                        <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tepunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="child-comment">
                                                <li>
                                                    <div class="comment">
                                                        <div class="image"><img src="assets/images/review/02.png" alt=""></div>
                                                        <div class="content">
                                                            <h5>Devid Bepari</h5>
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="time">10 hour ago</span>
                                                            </div>
                                                            <div class="decs">
                                                                <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="image"><img src="assets/images/review/03.png" alt=""></div>
                                                <div class="content">
                                                    <h5>Neha Jhograti</h5>
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <span class="time">6 hour ago</span>
                                                    </div>
                                                    <div class="decs">
                                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    <h4>Leave a Comments</h4>
                                    
                                    <div class="comment-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Your Name"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Phone"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Subject"></div>
                                                <div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>
                                                <div class="col-12"><button class="btn send-btn btn-circle">Send</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div><!-- Featured Properites End -->  

</main>
<!--// Page Conttent