    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Kontrakan</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Master</a></li>
                            <li class="breadcrumb-item active">Kontrakan</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="<?php echo base_url() ?>kontrakan/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Kontrakan</a>
                        <p></p>
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Daftar Kontrakan</b></h4>
                            <p class="text-muted font-13 m-b-30">
                            </p>

                            <table id="" class="table table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kontrakan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Tersedia</th>
                                    <th>Terisi</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($data as $key => $value): ?>
                                    <tr>

                                        <td><?php echo $no;$no++ ?></td>
                                        <td><?php echo $value['nama_kontrakan'] ?></td>
                                        <td>Rp. <?php echo number_format($value['harga'],0,',','.') ?></td>
                                        <td><?php echo $value['jumlah'] ?></td>
                                        <td><?php echo $value['terisi'] ?></td>
                                        <td><?php echo $value['tersedia'] ?></td>
                                        <td>
                                            <div class="btn-group">                                        
                                                <a data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus kontrakan <?php echo $value['nama_kontrakan'] ?>')" href="<?php echo base_url() ?>kontrakan/hapus/<?php echo $value['id_kontrakan'] ?>"><i class="fa fa-trash"></i></a>
                                                <a data-toggle="tooltip" title="Edit" class="btn btn-sm btn-warning" href="<?php echo base_url() ?>kontrakan/edit/<?php echo $value['id_kontrakan'] ?>"><i class="fa fa-edit"></i></a>
                                                <a data-toggle="tooltip" title="Gambar" class="btn btn-sm btn-success" href="<?php echo base_url() ?>kontrakan/gambar/<?php echo $value['id_kontrakan'] ?>"><i class="fa fa-image"></i></a>
                                                <a data-toggle="tooltip" title="Detail" class="btn btn-sm btn-light" href="<?php echo base_url() ?>kontrakan/detail/<?php echo $value['id_kontrakan'] ?>"><i class="fa fa-envira"></i></a>
                                                <a data-toggle="tooltip" title="Fasilitas" class="btn btn-sm btn-primary" href="<?php echo base_url() ?>kontrakan/fasilitas/<?php echo $value['id_kontrakan'] ?>"><i class="fa fa-bed"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-4 offset-md-6 offset-lg-8">
                                    <?php echo $pagination ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


