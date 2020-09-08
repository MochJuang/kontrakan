    <?php 
        $data['nama_kontrakan'] = (set_value('nama_kontrakan')) ? set_value('nama_kontrakan') : $data['nama_kontrakan'];
        $data['type'] = (set_value('type')) ? set_value('type') : $data['type'];
        $data['kota'] = (set_value('kota')) ? set_value('kota') : $data['kota'];
        $data['kategori'] = (set_value('kategori')) ? set_value('kategori') : $data['kategori'];
        $data['lokasi'] = (set_value('lokasi')) ? set_value('lokasi') : $data['lokasi'];
        $data['luas'] = (set_value('luas')) ? set_value('luas') : $data['luas'];
        $data['harga'] = (set_value('harga')) ? set_value('harga') : $data['harga'];
        $data['deskripsi'] = (set_value('deskripsi')) ? set_value('deskripsi') : $data['deskripsi'];
        $data['kuantitas'] = (set_value('kuantitas')) ? set_value('kuantitas') : $data[0];
        $data['tagihan'] = (set_value('tagihan')) ? set_value('tagihan') : $data['listrik'];
     ?>
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
                        <h4>Edit Kontrakan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Master</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo base_url() ?>kontrakan">Kontrakan</a></li>
                            <li class="breadcrumb-item active">Edit Kontrakan</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            <h4>Pemberitahuan !!</h4>
                            <p>Kamar Yang Sudah Di Pakai Tidak Bisa Di Hapus atau 
                            Ditambahkan</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="card-body">
                                <form class="form-horizontal" method="post" action="<?php echo base_url() ?>kontrakan/action_edit">
                                    <input type="hidden" name="id_kontrakan" value="<?php echo $data['id_kontrakan'] ?>">
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Nama Kontrakan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $data['nama_kontrakan'] ?>" name="nama_kontrakan" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Type Kontrakan</label>
                                        <div class="col-sm-9">
                                            <select id="" value="<?php echo $data['type'] ?>" name="type" class="form-control">
                                                <option value="" > -------- Pilih Type Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_type() as $key => $value): ?>
                                                    <?php if ($value['id_type'] == $data['type']): ?>
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
                                            <select id="" value="<?php echo $data['kota'] ?>" name="kota" class="form-control">
                                                <option value="" > -------- Pilih Kota Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_kota() as $key => $value): ?>
                                                    <?php if ($value['id_kota'] == $data['kota']): ?>
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
                                            <select id="" value="<?php echo $data['kategori'] ?>" name="kategori" class="form-control">
                                                <option value="" > -------- Pilih Kategori Kontrakannya --------</option>
                                                <?php foreach ($this->backend->get_kategori() as $key => $value): ?>
                                                    <?php if ($value['id_kategori'] == $data['kategori']): ?>
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
                                            <input type="text" value="<?php echo $data['lokasi'] ?>" name="lokasi" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Harga Kontrakan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-addon">Rp. </div>
                                                <input type="number" value="<?php echo $data['harga'] ?>" name="harga" class="form-control" required />
                                            </div>
                                            <?php echo form_error('harga' ,'<span class="small" style="color: #a94442">','</span>') ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Luas Kontrakan</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $data['luas'] ?>" name="luas" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Deskripsi Kontrakan</label>
                                        <div class="col-sm-9">
                                            <textarea name="deskripsi" id="" cols="20" rows="2" class="form-control"><?php echo $data['deskripsi'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Kuantitas Kontrakan</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input type="number" value="<?php echo $data['kuantitas'] ?>" name="kuantitas" class="form-control" required  />
                                                <div class="input-group-addon">Kontrakan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 form-control-label">Tagihan Listrik</label>
                                        <div class="col-sm-9">
                                            <div class="form-radio">
                                                <label>
                                                    <input type="radio" <?php echo ($data['tagihan'] == 'yes') ? 'checked' : '' ?> name="tagihan" id="tagihan1" value="yes" checked="">
                                                    Termasuk Tagihan Listrik
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <label>
                                                    <input type="radio" <?php echo ($data['tagihan'] == 'no') ? 'checked' : '' ?> name="tagihan" id="tagihan1" value="no">
                                                    Tanpa Tagihan Listrik
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo base_url() ?>kontrakan" class="btn btn-warning">Kembali</a>
                                    <input type="submit" class="btn btn-primary" value="Submit" value="Edit" name="submit">
                                </form>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
