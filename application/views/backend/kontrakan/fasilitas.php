<style>
	.exit{
		position: absolute !important;
		margin: 0 !important;
	}
</style>
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h4>Fasilitas</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Master</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>kontrakan">Kontrakan</a></li>
                        <li class="breadcrumb-item active">Fasilitas</li>
                    </ol>
                </div>
                <div class="col-md-3">
                	<a href="#add-fasilitas" data-toggle="modal" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                    <a href="<?php echo base_url() ?>kontrakan">
                        <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Kembali 
                            <span class="m-1-5"><i class="fa fa-reply"></i></span></span>
                        </button>
                	</a>
                </div>
            </div>
            <div class="row">
            	<?php foreach ($this->backend->get_fasilitas($id) as $key => $value): ?>
            		
            	<div class="col-3 col-md-1">
					<div class="btn-group-vertical" title="<?php echo $value['fasilitas'] ?>" data-toggle="tooltip">					
	            		<div class="btn btn-white">
	            			<i class="fa <?php echo $value['icon'] ?> fa-3x"></i>
	            			<a 
	            				href="<?php echo base_url().'kontrakan/remove_fasilitas/'.$id.'/'.$value['id_fasilitas'] ?>" 
	            				class="badge badge-danger badge-pill exit"
	            				onclick="return confirm('Apakah anda yakin ingin menghapus fasilitas <?php echo $value['fasilitas'] ?>')" >&times;</a>
	            		</div>
					</div>
            	</div>
            	<?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add-fasilitas">
	<div class="modal-dialog" role="document">
		<form method="post" action="<?php echo base_url() ?>kontrakan/fasilitas_add/<?php echo $id ?>">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Tambah Fasilitas</h4>
			</div>
			<div class="modal-body">

				<div class="row">
					<?php foreach ($this->backend->get_fasilitas($id,'add') as $key => $value): ?>
					<div class="col-6 col-md-4 col-lg-2">
						<div class="custom-control custom-checkbox" title="<?php echo $value['fasilitas'] ?>" data-toggle="tooltip">
							<input id="<?php echo $value['id_fasilitas_master'] ?>" type="checkbox" class="custom-control-input" name="fasilitas[]" value="<?php echo $value['id_fasilitas_master'] ?>">
							<label for="<?php echo $value['id_fasilitas_master'] ?>" class="custom-control-label"><i class="fa <?php echo $value['icon'] ?> fa-3x"></i></label>
						</div>
					</div>
					<?php endforeach ?>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
		</form>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->