<div class="content-page">
                <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="btn-group pull-right m-t-15">
                        <a href="<?php echo base_url() ?>kontrakan/gambar/<?php echo $id ?>">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light">Kembali 
                                <span class="m-1-5"><i class="fa fa-reply"></i></span></span>
                            </button>
                        </a>
                    </div>
                    <h4 class="page-title">Galeri</h4>
                    <ol class="breadcrumb">
                        <li><a href="htrtp://localhost/kontrakan.id/">Dashboard</a></li>
                        <li><a href="http://localhost/kontrakan.id/galeri">Galeri</a></li>
                        <li class="active">Add</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 portlets">
                    <!-- Your awesome content goes here -->
                    <div class="m-b-30">
                        <form action="<?php echo base_url() ?>kontrakan/act_img/<?php echo $id ?>" class="dropzone" id="dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

