   <!-- Main content -->
   <section class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-12">
                   <div class="card">
                       <div class="card-header">
                           <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</button>
                       </div>
                       <!-- /.card-header -->
                       <div class="card-body">
                           <p class="login-box-msg"> <?= $this->session->flashdata('message'); ?></p>
                           <table id="example2" class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th style="width: 8px;">No</th>
                                       <th>Nama</th>
                                       <th>Deskripsi</th>
                                       <th style="width: 10%;">Gambar</th>
                                       <th style="width: 50px;"></th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $no = 1;
                                    foreach ($data as $data) { ?>
                                       <tr>
                                           <td><?= $no++ ?></td>
                                           <td><?= $data['nama'] ?></td>
                                           <td> <?= $data['deskripsi'] ?></td>
                                           <td>
                                               <img class="rounded" style="width: 100%;" src="<?= base_url('uploads/' . $data['gambar']); ?>" alt="">
                                           </td>
                                           <td>
                                               <a href="" data-toggle="modal" data-target="#ubahData<?= $data['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                               <a href="<?php echo base_url() . 'dashboard/hapus_data/' . $data['id'] ?> " onClick='return confirm("Apakah anda yakin ingin menghapus data ini?")' class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                                           </td>
                                       </tr>
                                   <?php } ?>
                               </tbody>

                           </table>
                       </div>
                       <!-- /.card-body -->
                   </div>
                   <!-- /.card -->

               </div>
               <!-- /.col -->
           </div>
       </div><!-- /.container-fluid -->
   </section>
   <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
           <div class="modal-content">
               <div class="modal-header bg-info">
                   <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">

                   <form action="<?= base_url(); ?>dashboard/tambah_data" method="post" enctype="multipart/form-data">
                       <div class="card-body">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Nama</label>
                               <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Masukakn Judul">
                           </div>

                           <div class="form-group">
                               <label for="exampleFormControlTextarea1">Deskripsi</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Deskripsi" name="deskripsi"></textarea>
                           </div>

                           <div class="form-group">
                               <label for="exampleInputFile">Gambar</label>

                               <div class="input-group">
                                   <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                                       <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                   </div>

                               </div>

                           </div>

                       </div>
                       <!-- /.card-body -->

                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Simpan</button>
                       </div>
                   </form>
               </div>
           </div>

       </div>
   </div>

   <?php foreach ($data1 as $d) { ?>

       <div class="modal fade" id="ubahData<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form action="<?= base_url(); ?>dashboard/edit_data" method="post" enctype="multipart/form-data">
                           <div class="card-body">
                               <div class="form-group">
                                   <label for="exampleInputEmail1">Nama</label>
                                   <input type="hidden" value="<?= $d['id'] ?>" name="id">
                                   <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $d['nama'] ?>" name="nama">
                               </div>

                               <div class="form-group">
                                   <label for="exampleFormControlTextarea1">Deskripsi</label>
                                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $d['deskripsi'] ?></textarea>
                               </div>

                               <div class="form-group">
                                   <label for="exampleInputFile">Gambar</label>

                                   <div class="row">
                                       <div class="col-10">
                                           <div class="input-group">
                                               <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar" value="<?= $d['gambar'] ?>">
                                                   <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                                               </div>

                                           </div>
                                       </div>
                                       <div class="col-2">
                                           <img class="rounded" style="width: 100%;" src="<?= base_url('uploads/' . $d['gambar']); ?>" alt="">
                                       </div>
                                   </div>

                               </div>

                           </div>
                           <!-- /.card-body -->

                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                               <button type="submit" class="btn btn-primary">Simpan</button>
                           </div>
                       </form>
                   </div>

               </div>
           </div>
       </div>
   <?php } ?>