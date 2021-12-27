
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
                        <h3 class="card-label">Edit Data Kendala</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_kendala')?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<form action="<?= site_url('Master_kendala/proses_edit_data')?>" method="POST">
				<div class="card-body">
				<div class="form-group">
					<input type="hidden" class="form-control" name="id" required value="<?= $kendala->kendala_id?>"/>
					<label for="exampleSelect1">Tipe Kendala <span class="text-danger">*</span></label>
					<select class="form-control" name="type" required >
						<option <?php if($kendala->tipe_kendala == 'FOC' ): ?> selected <?php endif?>>FOC</option>
						<option <?php if($kendala->tipe_kendala == 'FOT' ): ?> selected <?php endif?>>FOT</option>
						<option <?php if($kendala->tipe_kendala == 'Perijinan' ): ?> selected <?php endif?>>Perijinan</option>
						<option <?php if($kendala->tipe_kendala == 'Customer' ): ?> selected <?php endif?>>Customer</option>
						<option <?php if($kendala->tipe_kendala == 'Service' ): ?> selected <?php endif?>>Service</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Keterangan Kendala <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="nama" required value="<?=$kendala->nama_kendala?>"/>
				</div>
				<div class="card-footer">
				<button type="submit" class="btn btn-primary mr-2">Submit</button>
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
