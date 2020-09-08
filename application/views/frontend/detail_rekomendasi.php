<div class="breadcrumb-area section" style="background-image: url(<?php echo base_url() ?>assets/front/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Properties Details</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Detail Rekomendasi</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->

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
                <?php echo $pagination ?>
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