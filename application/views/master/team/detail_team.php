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
				<!--begin::Body-->
				<div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-table text-primary"></i>
                        </span>
                        <h3 class="card-label">Detail Mitra Info </h3>
                        <h3 class="card-label"><?=$user->nama_mitra?></h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_team')?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<div class="card-body">
					<div class="form-group row">
						<label class="col-xl-2 col-lg-3 col-form-label">Alamat</label>
						<div class="col-xl-9">
							<input class="form-control form-control-solid" type="text" value="<?=$user->Alamat?>" disabled not-allowed/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-2 col-lg-3 col-form-label">Email</label>
						<div class="col-xl-9">
							<input class="form-control form-control-solid" type="text" value="<?=$user->email?>" disabled not-allowed/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-2 col-lg-3 col-form-label">No-Telp</label>
						<div class="col-xl-9">
							<input class="form-control form-control-solid" type="text" value="<?=$user->no_telp?>" disabled not-allowed/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-2 col-lg-3 col-form-label">Jumlah Tim</label>
						<div class="col-xl-9">
							<input class="form-control form-control-solid" type="text" value="<?=sizeof($teamlap->result())?>" disabled not-allowed/>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-xl-8">
							<h3 class="card-label">List Team Mitra</h3>
						</label>
						<div class="col-xl-3">
							<!--begin::Button-->
							<a href="<?= site_url('Master_team/tambah_team/'.$user->mitra_id)?>" class="btn btn-primary font-weight-bolder">
							<i class="fas fa-plus-square"></i>Tambah Team Mitra</a>
						</div>
					</div>
					<!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Team</th>
                                <th>Pekerja</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php $no = 1;foreach ($teamlap->result() as $key => $data)  {?>
                            <tr>
                                <td><?=$no++;?></td>
                                <td><?=$data->nama_team?></td>
                                <td><?=$data->nama_pekerja?></td>
                                <td></td>
                            </tr>
						<?php } ?>
                        </tbody>
                    </table>
                    <!--end: Datatable-->
				</div>
				<!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
