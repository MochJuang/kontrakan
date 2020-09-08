    <style>
        label{
            font-size : 15px !important;
        }
    </style>
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Tambah Kontrakan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Master</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>kontrakan">Kontrakan</a></li>
                            <li class="breadcrumb-item active">Tambah Kontrakan</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-body">
                                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>kontrakan/tambah">
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Nama Kontrakan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo set_value('nama_kontrakan') ?>" name="nama_kontrakan" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Type Kontrakan</label>
                                        <div class="col-sm-9">
                                            <select id="" value="<?php echo set_value('type') ?>" name="type" class="form-control">
                                                <option value="" <?php echo (set_value('type')) ? 'selected' : '' ?> > -------- Pilih Type Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_type() as $key => $value): ?>
                                                    <?php if ($value['id_type'] == set_value('type')): ?>
                                                        <option value="<?php echo $value['id_type'] ?>" selected><?php echo $value['type'] ?></option>
                                                    <?php endif ?>
                                                    <option value="<?php echo $value['id_type'] ?>"><?php echo $value['type'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <?php echo form_error('type' ,'<span class="small" style="color: #a94442">','</span>') ?>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Kota</label>
                                        <div class="col-sm-9">
                                            <select id="" value="<?php echo set_value('kota') ?>" name="kota" class="form-control">
                                                <option value="" <?php echo (set_value('kota')) ? 'selected' : '' ?> > -------- Pilih Kota Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_kota() as $key => $value): ?>
                                                    <?php if ($value['id_kota'] == set_value('kota')): ?>
                                                        <option value="<?php echo $value['id_kota'] ?>" selected><?php echo $value['kota'] ?></option>                                                        
                                                    <?php endif ?>
                                                    <option value="<?php echo $value['id_kota'] ?>"><?php echo $value['kota'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <?php echo form_error('kota' ,'<span class="small" style="color: #a94442">','</span>') ?>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Kategori</label>
                                        <div class="col-sm-9">
                                            <select id="" value="<?php echo set_value('kategori') ?>" name="kategori" class="form-control">
                                                <option value="" <?php echo (set_value('kate')) ? 'selected' : '' ?> > -------- Pilih Kategori Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_kategori() as $key => $value): ?>
                                                    <?php if ($value['id_kategori'] == set_value('kategori')): ?>
                                                        <option value="<?php echo $value['id_kategori'] ?>" selected><?php echo $value['kategori'] ?></option>

                                                    <?php endif ?>
                                                    <option value="<?php echo $value['id_kategori'] ?>"><?php echo $value['kategori'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <?php echo form_error('kategori' ,'<span class="small" style="color: #a94442">','</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Lokasi Kontrakan</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo set_value('lokasi') ?>" name="lokasi" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Harga Kontrakan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon">Rp. </div>
                                                <input type="number" value="<?php echo set_value('harga') ?>" name="harga" class="form-control" required />
                                            </div>
                                            <?php echo form_error('harga' ,'<span class="small" style="color: #a94442">','</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Luas Kontrakan</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo set_value('luas') ?>" name="luas" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Deskripsi Kontrakan</label>
                                        <div class="col-sm-9">
                                            <textarea name="deskripsi" id="" cols="20" rows="2" class="form-control"><?php echo set_value('deskripsi') ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Kuantitas Kontrakan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="number" value="<?php echo set_value('kuantitas') ?>" name="kuantitas" class="form-control" required  />
                                                <div class="input-group-addon">Kontrakan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Tagihan Listrik</label>
                                        <div class="col-sm-9">
                                            <div class="form-radio">
                                                <label>
                                                    <input type="radio" <?php echo (set_value('tagihan') == 'yes') ? 'checked' : '' ?> name="tagihan" id="tagihan1" value="yes" checked="">
                                                    Termasuk Tagihan Listrik
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <label>
                                                    <input type="radio" <?php echo (set_value('tagihan') == 'no') ? 'checked' : '' ?> name="tagihan" id="tagihan1" value="no">
                                                    Tanpa Tagihan Listrik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Tagihan Listrik</label>
                                        <div class="col-sm-9">
                                            <input type="file" required="" name="file" class="form-control">
                                        </div>
                                    </div>

                                    <a href="<?php echo base_url() ?>kontrakan" class="btn btn-warning">Kembali</a>
                                    <input type="submit" class="btn btn-primary" value="Submit" value="<?php echo set_value('submit') ?>" name="submit">
                                </form>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
