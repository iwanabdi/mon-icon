
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
                        <h3 class="card-label">Master Kendala</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_kendala/add')?>" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Tambah Data Kendala</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>Kendala ID</th>
                                <th>Tipe Kendala</th>
                                <th>Nama Kendala</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
												<?php foreach ($kendala->result() as $key => $data)  {?>
                            <tr>
																<td><?=$data->kendala_id?></td>
                                <td><?=$data->tipe_kendala?></td>
                                <td><?=$data->nama_kendala?></td>
                                <td>
																	<a href="<?= site_url('Master_kendala/edit/'.$data->kendala_id)?>">
																		<i class="far fa-edit text-success mr-5"></i>
																	</a>
																	<a href="#hapus_modal<?=$data->kendala_id;?>" data-toggle="modal" >
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
<?php foreach ($kendala->result() as $key => $data) : ?>
<div class="modal fade" id="hapus_modal<?=$data->kendala_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Master_kendala/hapus_data'); ?>
        <input type="hidden" id="id" name="id" value="<?=$data->kendala_id?>">
        <p>Anda akan menghapus data "<?=$data->nama_kendala ?>"</p>
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
