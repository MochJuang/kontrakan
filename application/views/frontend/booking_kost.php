<!-- Search Section Start -->

<!-- Hero Section Start -->
<div class="hero-section section home-3-map">
   
    <div id="gmap"></div>
    
</div><!-- Hero Section End -->
<div class="search-section section">
    <div class="container">
        
        <div class="search-wrap mt__0">
            <div class="row">
                <div class="col text-center">
                    <h2>Find your home</h2>
                </div>
            </div>
            <form action="<?php echo base_url() ?>booking/" method="post">
                <div class="row">
                    
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <select class="nice-select" name="kota">
                            <?php foreach ($this->backend->get_kota() as $key => $value): ?>
                                <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['kota'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <select class="nice-select" name="kategori">
                            <?php foreach ($this->backend->get_kategori() as $key => $value): ?>
                                <option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['kategori'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <select class="nice-select" name="type">
                            <?php foreach ($this->backend->get_type() as $key => $value): ?>
                                <option value="<?php echo $value['id_type'] ?>"><?php echo $value['type'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <input type="text" value="0" name="harga_min">
                    </div>
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <input type="text" value="100000" name="harga_max">
                    </div>
                    
                    <div class="col-lg-2 col-md-6 col-12 mb-25">
                        <input type="submit" value="search">
                    </div>
                    
                </div>

            </form>
        </div>
        
    </div>
</div><!-- Search Section End -->

<!-- Featured Properites Start -->   
<div class="featured-properites-section section pt-80 pt-md-60 pt-sm-40 pt-xs-60">
    <div class="container">
        <div class="row">

            <?php foreach ($data as $key => $value): ?>
                

            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="<?php echo base_url() ?>home/detail/<?php echo $value['id_kontrakan'] ?>">
                            <img src="<?php echo base_url() ?>/assets/upload/<?php echo $value['foto'] ?>" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="<?php echo base_url() ?>home/detail/<?php echo $value['id_kontrakan'] ?>"><?php echo $value['nama_kontrakan'] ?> </a></h4>
                        <p>
                            <span class="location"><?php echo $value['lokasi'] ?></span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p><?php echo number_format($value['harga'],0,',','.') ?>/ <?php echo $value['type'] ?></p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>

            <?php endforeach ?>
            
        </div>
        <div class="row pt-40">
            <div class="col">
                <ul class="page-pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
            
    </div>
</div><!-- Featured Properites End -->  

<div class="ortiz-banner-area section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-inner-box">
                    <img src="<?php echo base_url() ?>assets/front/images/banner/banner-01.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>