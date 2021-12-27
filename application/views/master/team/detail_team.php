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
				<div class="card-body">
					<div class="row">
						<label class="col-xl-5"></label>
						<div class="col-lg-5 col-xl-6">
							<h5 class="font-weight-bold mb-6">Detail Mitra Info</h5>
							<h5 class="font-weight-bold mb-6"><?=$user->nama_mitra?></h5>
							<br>
						</div>
					</div>
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
							<a href="<?= site_url('Master_team/add')?>" class="btn btn-primary font-weight-bolder">
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
