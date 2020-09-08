<!-- Hero Section Start -->
<div class="hero-section section">

    <div class="hero-slider hero-slider-one">
        <div class="hero-slide-item" style="background-image: url(<?php echo base_url() ?>assets/front/images/hero/hero-2.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9 ml-auto mr-auto">
                        
                        <div class="hero-content text-center">
                            <h1>Cari Kontrakan ?</h1>
                            <h3 class="text-white mt-25">Disinilah Tempatnya</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slide-item" style="background-image: url(<?php echo base_url() ?>assets/images/front/hero/hero-3.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-9 ml-auto mr-auto">
                        
                        <div class="hero-content text-center">
                            <h1>Find your Property</h1>
                            <h3 class="text-white mt-25">Luxurious and Suitable Property for you</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- Hero Section End -->

<!-- Featured Properites Start -->   
<div class="featured-properites-section section py-5">
    <div class="container">
      
        <div class="row">
            <div class="section-title text-left col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <div class="row">
                    <div class="col-md-3    ">
                        <h3>Rekomendasi Kos</h3>
                    </div>
                    <div class="col-md-4">
                        <select name="rekomendasi" id="" class="nice-select">
                            <?php foreach ($this->backend->get_kota() as $key => $value): ?>
                                <?php if ($value['id_kota'] == 6): ?>                                
                                    <option value="<?php echo $value['id_kota'] ?>" selected><?php echo $value['kota'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['kota'] ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
       
        <div id="reload_rekomendasi" class="row">
           
            
        </div>
        <div class="row">
            <div class="col">
                <a id="detail_rek" href="" class="mt-3 btn">Lihat Semua</a>
            </div>
        </div>
        
    </div>
</div><!-- Featured Properites End -->  
<div class="featured-properites-section section py-5">
    <div class="container">
      
        <div class="row">
            <div class="section-title text-left col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <div class="row">
                    <div class="col-md-3    ">
                        <h3>Promosi  Kos</h3>
                    </div>
                    <div class="col-md-4">
                        <select name="" id="" class="nice-select">
                            <?php foreach ($this->backend->get_kota() as $key => $value): ?>
                                <?php if ($value['id_kota'] == 6): ?>                                
                                    <option value="<?php echo $value['id_kota'] ?>" selected><?php echo $value['kota'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['kota'] ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                
            </div>
        </div>
       
        <div class="row">
           
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="<?php echo base_url() ?>assets/front/images/propertes/01.jpg" alt="">
                        </a>
                        <span class="level-stryker">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Mariyasa de Casel </a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $ 1,59,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="<?php echo base_url() ?>assets/upload/CAPTURE.PNG" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rose de Alfanez</a></h4>
                        <p>
                            <span class="location">132 Future Street, Boston, USA</span>
                            <span class="property-info">1600 Sqft, 4 Bed, 2 Bath, 2 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $ 1,59,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="<?php echo base_url() ?>assets/front/images/propertes/03.jpg" alt="">
                        </a>
                        <span class="level-stryker-2">FOR RENT</span>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">La Casanda Villa</a></h4>
                        <p>
                            <span class="location">1 DE Silicon Tower, Denver</span>
                            <span class="property-info">1800 Sqft, 6 Bed, 4 Bath, 3 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Price $2,32,000</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
            <div class="col-lg-3 col-md-6 col-12">
                <!-- single-property Start -->
                <div class="single-property mt-30">
                    <div class="property-img">
                        <a href="properties-details.html">
                            <img src="<?php echo base_url() ?>assets/front/images/propertes/04.jpg" alt="">
                        </a>
                    </div>
                    <div class="property-desc">
                        <h4><a href="properties-details.html">Rainforest de Olive</a></h4>
                        <p>
                            <span class="location">22 First street, Chicago, USA</span>
                            <span class="property-info">1200 Sqft, 3 Bed, 2 Bath, 1 Garage </span>
                        </p>
                        <div class="price-box">
                            <p>Rent $32,00/m</p>
                        </div>
                    </div>
                </div><!-- single-property End -->
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <a href="" class="mt-3 btn">Lihat Semua</a>
            </div>
        </div>

        
    </div>
</div><!-- Featured Properites End -->  
