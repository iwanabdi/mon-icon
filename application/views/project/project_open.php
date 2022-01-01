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
                        <h3 class="card-label">Datatable Project Open</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="<?= site_url('Project_open/add')?>" class="btn btn btn-light-success font-weight-bolder">
                        <i class="fas fa-plus-square"></i>New Data</a>
						<a href="#" class="btn btn-light-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Import Excel</a>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable3" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Project ID</th>
                                <th>Pelanggan</th>
                                <th>Layanan</th>
                                <th>Bandwith</th>
                                <th>SID</th>
                                <th>IO</th>
                                <th>Alamat</th>
                                <th>Project Manager</th>
                                <th>Mitra</th>
								<th>Status</th>
								<th>Kendala</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $no = 1;foreach ($project->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->project_id?></td>
                                <td><?=$data->pelanggan?></td>
                                <td><?=$data->layanan?></td>
                                <td><?=$data->bandwith?></td>
                                <td><?=$data->sid?></td>
                                <td><?=$data->io?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->user_id?></td>
                                <td>mitra join stg</td>
                                <td>
									<?php if($data->status_project ==1){ echo "Disposisi";}
										elseif($data->status_project ==2){echo "Survey";}
										elseif($data->status_project ==3){echo "Penarikan";}
										elseif($data->status_project ==4){echo "Testcom";}
										elseif($data->status_project ==5){echo "Administrasi";}
									?>
								</td>
                                <td><?=$data->kendala_id?></td>
								<td>
									<a href="#pilihmitra" data-toggle="modal">
										<i class="far fa-edit text-success mr-5"></i>
									</a>
									<a href="#hapus_modal" data-toggle="modal" id="hapusproject" data-id="<?=$data->project_id?>">
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
<div class="modal fade" id="hapus_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus?</h5>
        <button class="btn btn-light-danger" type="button" data-dismiss="modal" aria-label="Close">
					<i class="far fa-window-close text-danger"></i>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Project_open/hapus_data'); ?>
        <p>Anda akan menghapus Project </p>
        <input type="text" id="project_id" name="project_id" readonly>
      </div>	
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <button class="btn btn-danger" type="submit">Ya</button>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(document).on('click', '#hapusproject', function() {
      var project_id = $(this).data('id');
      $('#project_id').val(project_id);
    })
  })
</script>
<!-- Akhir Modal Hapus Data -->
