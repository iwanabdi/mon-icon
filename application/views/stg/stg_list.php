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
                        <h3 class="card-label">Data Surat Tugas</h3>
                    </div>
                    <div class="card-toolbar">
                        <a href="<?= site_url('Project_open/add')?>" class="btn btn btn-light-success font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Buat STG</a>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-separate table-head-custom table-checkable " id="dataTable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No STG</th>
                                <th>Mitra</th>
                                <th>PTL</th>
                                <th>Nomer PA</th>
                                <th >Request Date</th>
                                <th>Target Date</th>
								<th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						<form action="<?= site_url('Project_detail')?>" method="POST" id="idde">
						<input type="hidden" id="project_iddetail" name="project_iddetail" required/>
						<?php $no = 1;foreach ($stg->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->nomer_stg?></td>
                                <td><?=$data->mitra?></td>
                                <td><?=$data->pegawai?></td>
                                <td><?=$data->project_id?></td>
                                <td><?=$data->create_on?></td>
                                <td><?=$data->target_date?></td>
                                <td>
									<a href="#modal_dipos_pm" data-toggle="modal" id="dispospm" data-idptl="<?=$data->project_id?>">
										<i class="fas fa-child text-info mr-5"></i>
									</a>
									<a href="#modal_dispos" data-toggle="modal" id="disposproject" data-idp="<?=$data->project_id?>">
										<i class="fas fa-paper-plane text-success mr-5"></i>
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
