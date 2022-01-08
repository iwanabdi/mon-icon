
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
						<!--begin::Notice-->
						<?= $this->session->flashdata('pesan'); ?>
            <!--end::Notice-->
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
                    <table class="table table-separate table-head-custom table-checkable" id="dataTable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>No Telp</th>
                                <th>Jabatan</th>
																<th>Email</th>
																<th>Status</th>
																<th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
												<?php $no = 1;foreach ($user->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->nama_user?></td>
                                <td><?=$data->no_telp?></td>
																<td>
																	<?php if ($data->jabatan == 1) {echo "Supervisor";}
																				else if($data->jabatan == 2) {echo "Engineer";} 
																				else if($data->jabatan == 3) {echo "QC";} 
																				else if($data->jabatan == 4) {echo "Admin";} 
																				else if($data->jabatan == 5) {echo "Gudang";} 
																				else{echo "Developer";}
																	?>
																</td>
                                <td><?=$data->email_user?></td>
																<td>
																	<?php if ($data->status == 1) {echo "Aktif";}
																				else{echo "Not Aktif";} 
																	?>
																</td>
                                <td>
																<a href="<?= site_url('Master_user/edit/'.$data->user_id)?>">
																	<i class="far fa-edit text-success mr-5"></i>
																</a>
																<?php if ($data->status == 0){?>
																	<a href="#aktif<?=$data->user_id;?>" data-toggle="modal" >
																	<i class="fas fa-lock-open text-info mr-5"></i>
																	</a>
																<?php } else if ($data->status == 1){?>
																<a href="#hapus_modal<?=$data->user_id;?>" data-toggle="modal" >
																	<i class="far fas fa-lock text-danger mr-5"></i>
																</a>
																<?php } ?>
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
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menonaktifkan?</h5>
        <button class="btn btn-light-danger" type="button" data-dismiss="modal" aria-label="Close">
					<i class="far fa-window-close text-danger"></i>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Master_user/hapus_data'); ?>
        <input type="hidden" id="id" name="id" value="<?=$data->user_id?>">
        <p>Anda akan menonaktifkan data "<?=$data->nama_user ?>"</p>
      </div>	
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-danger" type="submit">Ya</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal Hapus Data -->

<!-- Modal aktiv user-->
<?php foreach ($user->result() as $key => $data) : ?>
<div class="modal fade" id="aktif<?=$data->user_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin mengaktifkan?</h5>
        <button class="btn btn-light-danger" type="button" data-dismiss="modal" aria-label="Close">
					<i class="far fa-window-close text-danger"></i>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Master_user/aktif_data'); ?>
        <input type="hidden" id="id" name="id" value="<?=$data->user_id?>">
        <p>Anda akan mengaktifkan data "<?=$data->nama_user ?>"</p>
      </div>	
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-danger" type="submit">Ya</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<!-- Akhir Modal aktiv user-->
