
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
			<?= $this->session->flashdata('msg_email');?>
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-table text-primary"></i>
                        </span>
                        <h3 class="card-label">Add Data Mitra</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_team')?>" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<form action="<?= site_url('Master_team/proses_add_data')?>" method="POST">
				<div class="card-body">
				<div class="form-group">
					<label>Nama Mitra <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="nama" required/>
				</div>
				<div class="form-group">
					<label>Alamat Mitra <span class="text-danger">*</span></label>
					<textarea class="form-control" name="alamat" rows="2" required></textarea>
				</div>
				<div class="form-group">
					<label>No-Telpon <span class="text-danger">*</span></label>
					<input type="number" class="form-control"  name="no-telp" required/>
				</div>
				<div class="form-group">
					<label>Email address <span class="text-danger">*</span></label>
					<input type="email" class="form-control"  name="email" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" placeholder="Password"  name="password" required/>
				</div>
				<div class="card-footer">
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
				<button type="reset" class="btn btn-secondary">Reset</button>
				</div>
				</form>
				<!--end::Form-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
