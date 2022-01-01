<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="fas fa-table text-primary"></i>
                        </span>
                        <h3 class="card-label">Add Data Project</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Project_open')?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<form action="<?= site_url('Project_open/proses_add_data')?>" method="POST">
				<div class="card-body">
				<div class="form-group">
					<label for="exampleInputPassword1">Project ID <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="project_id" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Customer <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="pelanggan" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">SID <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="sid" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">IO <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="io" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Layanan <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="layanan" required/>
				</div><div class="form-group">
					<label for="exampleInputPassword1">Bandwith <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="bandwith" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Alamat <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="alamat" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Keterangan <span class="text-danger">*</span></label>
					<textarea class="form-control" name="keterangan" rows="2" ></textarea>
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
