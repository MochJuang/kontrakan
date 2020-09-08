<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4>Gambar Kontrakan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Master</a></li>
                        <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>kontrakan">Kontrakan</a></li>
                        <li class="breadcrumb-item active">Gambar Kontrakan</li>
                    </ol>
                </div>
                <div class="col-md-3">
                	<a href="<?php echo base_url() ?>kontrakan/add_gambar/<?php echo $id ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo base_url() ?>kontrakan">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Kembali 
                            <span class="m-1-5"><i class="fa fa-reply"></i></span></span>
                        </button>
                	</a>
                </div>
            </div>
			<div class="row port">
                <div class="portfolioContainer">	
				<?php foreach ($data as $key => $value): ?>
					
                    <div class="col-sm-6 col-lg-3 col-md-4 webdesign illustrator">
                        <div class="gal-detail thumb" style="position:relative">
                            <a href="<?php echo base_url() ?>assets/upload/<?php echo $value['gambar'] ?>" class="image-popup" title="Screenshot-1">
                                <img src="<?php echo base_url() ?>assets/upload/<?php echo $value['gambar'] ?>" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <a data-toggle="tooltip" title="Hapus" style="position: absolute;top:0;right:0" 
                            		onclick="return confirm('Apakah anda yakin ingin menghapusnya ?')" 
                            		href="<?php echo base_url() ?>/kontrakan/remove_gambar/<?php echo $id ?>/<?php echo $value['id_gambar'] ?>" class="btn exit btn-sm btn-danger">
                            		<i class="fa fa-trash"></i></a>
                        </div>
                    </div>

				<?php endforeach ?>

                </div>
            </div> <!-- End row -->

        </div>
    </div>
</div>

