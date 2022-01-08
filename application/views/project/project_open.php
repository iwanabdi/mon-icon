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
						<form action="<?= site_url('Project_detail')?>" method="POST" id="idde">
						<input type="hidden" id="project_iddetail" name="project_iddetail" required/>
						<?php $no = 1;foreach ($project->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td>
																	<button type="submit" name="project_iddetail" value="<?=$data->project_id?>" class="btn btn-text-primary">
																	<?=$data->project_id?></button>
																</td>
                                <td><?=$data->pelanggan?></td>
                                <td><?=$data->layanan?> <?=$data->bandwith?></td>
                                <td><?=$data->sid?></td>
                                <td><?=$data->io?></td>
                                <td><?=$data->alamat?></td>
                                <td><?=$data->user_id?></td>
                                <td><?=$data->mitra_id?></td>
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
								<?php if($this->session->userdata('jabatan') ==1){ ?>
									<a href="#modal_dipos_pm" data-toggle="modal" id="dispospm" data-idptl="<?=$data->project_id?>">
										<i class="fas fa-child text-info mr-5"></i>
									</a>
								<?php }?>
									<a href="#modal_dispos" data-toggle="modal" id="disposproject" data-idp="<?=$data->project_id?>">
										<i class="fas fa-paper-plane text-success mr-5"></i>
									</a>
									<a href="#hapus_modal" data-toggle="modal" id="hapusproject" data-id="<?=$data->project_id?>">
										<i class="far fa-trash-alt text-danger mr-5"></i>
									</a>
								</td>
                            </tr>
							<?php } ?>
						</form>
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

<!-- Modal dispos mitra-->
<div class="modal fade" id="modal_dispos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Pilih Mitra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
              <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Nama Mitra</th>
                <th>Pilih</th>
              </tr>
            </thead>
            <tbody>
			<form action="<?= site_url('Project_open/dispos_mitra')?>" method="POST" id="frmdisposmitra">
			<input type="hidden" id="teamlap_id" name="teamlap_id" required/>
			<input type="hidden" id="mitra_id" name="mitra_id" required/>
			<input type="hidden" id="project_iddispos" name="project_id" required/>
              <?php
              foreach($mitra->result() as $i => $data)  {?>
              <tr>
                <td><?=$data->teamlap_id?></td>
                <td><?=$data->nama_team?></td>
                <td class="text-center">
                <button class="btn btn-info" id="selectmitra"
                data-idtm="<?= $data->teamlap_id?>" data-idm="<?= $data->mitra_id?>">Pilih
                </button>
                </td>
              </tr>
            <?php } ?>
			</form>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
	$(document).on('click', '#disposproject', function() {
      var project_id = $(this).data('idp');
      $('#project_iddispos').val(project_id);
    })
    $(document).on('click', '#selectmitra', function() {
      var mitra_id = $(this).data('idm');
      var teamlap_id = $(this).data('idtm');
      $('#mitra_id').val(mitra_id);
      $('#teamlap_id').val(teamlap_id);
	  $('#frmdisposmitra').submit;
    })
  })
</script>
<!-- Modal dispos mitra-->

<!-- buka detail project -->
<script type="text/javascript">
  $(document).ready(function() {
	$(document).on('click', '#detailproject', function() {
      var project_id = $(this).data('idde');
      $('#project_iddetail').val(project_id);
      $('#prodet').submit;
    })
  })
</script>

<!-- Modal dispos mitra-->
<div class="modal fade" id="modal_dipos_pm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Pilih PTL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
              <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Nama Pegawai</th>
                <th>Pilih</th>
              </tr>
            </thead>
            <tbody>
						<form action="<?= site_url('Project_open/dispos_pm')?>" method="POST" id="pilihpmform">
						<input type="hidden" id="user_idpm" name="user_id" required/>
						<input type="hidden" id="projectid_ptl" name="project_id" required/>
              <?php
              foreach($user->result() as $i => $data)  {?>
              <tr>
                <td><?=$data->user_id?></td>
                <td><?=$data->nama_user?></td>
                <td class="text-center">
                <button class="btn btn-info" id="selectuser"data-idu="<?= $data->user_id?>" >
								Pilih
                </button>
                </td>
              </tr>
            <?php } ?>
						</form>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
	$(document).on('click', '#dispospm', function() {
      var project_id = $(this).data('idptl');
      $('#projectid_ptl').val(project_id);
    })
  $(document).on('click', '#selectuser', function() {
      var user_id = $(this).data('idu');
      $('#user_idpm').val(user_id);
	  	$('#pilihpmform').submit;
    })
  })
</script>
<!-- Modal dispos mitra-->
