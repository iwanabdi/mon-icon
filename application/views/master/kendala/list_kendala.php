
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
									<i class="flaticon2-pen text-danger"></i>
									<i class="flaticon2-open-box text-warning"></i>	
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
