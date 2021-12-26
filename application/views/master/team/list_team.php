
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
                        <h3 class="card-label">Master Mitra</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_team/add')?>" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Tambah Data Mitra</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mitra</th>
                                <th>Email</th>
                                <th>No-Telp</th>
                                <th>Alamat</th>
								<th>Jumlah Tim</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $no = 1;foreach ($user->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->nama_mitra?></td>
                                <td><?=$data->email?></td>
                                <td><?=$data->no_telp?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->status?></td>
                                <td>
									<a href="<?= site_url('Master_team/edit/'.$data->user_id)?>">
										<i class="far fa-edit text-success mr-5"></i>
									</a>
									<a href="#hapus_modal<?=$data->user_id;?>" data-toggle="modal" >
										<i class="far fas fa-lock text-danger mr-5"></i>
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
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menonaktifkan?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
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
