
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-table text-primary"></i>
                        </span>
                        <h3 class="card-label">Master User</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_user/add')?>" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Tambah Data User</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>No Telp</th>
                                <th>Jabatan</th>
																<th>Email</th>
																<th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
												<?php $no = 1;foreach ($user->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->nama_user?></td>
                                <td><?=$data->no_telp?></td>
                                <td><?=$data->jabatan?></td>
                                <td><?=$data->email_user?></td>
                                <td>
																<a href="#lihat_password<?=$data->user_id;?>" data-toggle="modal" >
																	<i class="far fa-eye text-info mr-5"></i>
																</a>
																<a href="<?= site_url('Master_user/edit/'.$data->user_id)?>">
																	<i class="far fa-edit text-success mr-5"></i>
																</a>
																<a href="#hapus_modal<?=$data->user_id;?>" data-toggle="modal" >
																	<i class="far fa-trash-alt text-danger mr-5"></i>
																</a>
															</td>
                            </tr>
												<?php } ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>

<!-- Modal Hapus Data-->
<?php foreach ($user->result() as $key => $data) : ?>
<div class="modal fade" id="hapus_modal<?=$data->user_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Master_user/hapus_data'); ?>
        <input type="hidden" id="id" name="id" value="<?=$data->user_id?>">
        <p>Anda akan menghapus data "<?=$data->nama_user ?>"</p>
      </div>	
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-danger" type="submit">Hapus</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal Hapus Data -->

<!-- Modal lihat password -->
<?php foreach ($user->result() as $key => $data) : ?>
<div class="modal fade" id="lihat_password<?=$data->user_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php echo form_open_multipart('Master_user/hapus_data'); ?>
        <input type="hidden" id="id" name="id" value="<?=$data->user_id?>">
        <p>Password dari user"<?=$data->nama_user ?>"</p>
				<p><?=$data->password ?></p>
      </div>	
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-danger" type="submit">Hapus</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir lihat password -->
