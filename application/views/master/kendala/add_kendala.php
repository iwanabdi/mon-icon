
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
                        <h3 class="card-label">Add Data Kendala</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_kendala')?>" class="btn btn-primary font-weight-bolder">
                        <i class="fas fa-plus-square"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<form action="<?= site_url('Master_kendala/proses_add_data')?>" method="POST">
				<div class="card-body">
				<div class="form-group">
					<label for="exampleSelect1">Tipe Kendala <span class="text-danger">*</span></label>
					<select class="form-control" name="type" required >
					<option selected>FOC</option>
					<option>FOT</option>
					<option>Perijinan</option>
					<option>Customer</option>
					<option>Service</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Keterangan Kendala <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="nama" required/>
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
