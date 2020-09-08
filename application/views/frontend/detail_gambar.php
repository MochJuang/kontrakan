<div class="breadcrumb-area section" style="background-image: url(<?php echo base_url() ?>assets/front/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Gambar Detail</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/home/detail/4"><?php echo $kontrakan ?></a></li>
                        <li class="breadcrumb-item active">Detail Gambar</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<main class="page-content section"> 
   
    <!-- Featured Properites Start -->   
    <div class="properites-sidebar-wrap pt-80 pt-md-60 pt-sm-40 pt-xs-30 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
            <div class="row">
                <?php foreach ($data as $key => $value): ?>
                    <div class="col-6 col-md-4">
                        <img class="img-fluid img-thumbnail" src="<?php echo base_url() ?>assets/upload/<?php echo $value['gambar'] ?>" alt="">
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

</main>