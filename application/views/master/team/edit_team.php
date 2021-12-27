
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
                        <h3 class="card-label">Edit Data Mitra</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_team')?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<form action="<?= site_url('Master_team/proses_edit_data')?>" method="POST">
				<div class="card-body">
				<input type="hidden" class="form-control" name="id"  value="<?= $user->mitra_id;?>" />
				<div class="form-group">
					<label>Nama Mitra <span class="text-danger">*</span></label>
					<input type="text" class="form-control" name="nama"  value="<?= $user->nama_mitra;?>" required/>
				</div>
				<div class="form-group">
					<label>Alamat Mitra <span class="text-danger">*</span></label>
					<textarea class="form-control" name="alamat" rows="2" required><?=$user->Alamat;?></textarea>
				</div>
				<div class="form-group">
					<label>No-Telpon <span class="text-danger">*</span></label>
					<input type="number" class="form-control"  value="<?= $user->no_telp;?>" name="no-telp" required/>
				</div>
				<div class="form-group">
					<label>Email address <span class="text-danger">*</span></label>
					<input type="email" class="form-control"  value="<?= $user->email;?>" name="email" required/>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" placeholder="*******"  name="password" id="password" disabled/>
				</div>
				<div class="form-group row">
					<div class="col-sm-9">
					  <div class="form-check">
					    <input class="form-check-input" onclick="myFunction(!this.checked)" type="checkbox" id="defaultCheck1">
					    <label class="form-check-label" for="defaultCheck1">
					      <span>Centang untuk mengubah password Anda!</span>
					    </label>
					  </div>
					</div>
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

<script>
function myFunction(status) {
    status != status
      document.getElementById("password").disabled = status;
      document.getElementById("password").value = "";
	  document.getElementById("password").placeholder = "";
}
</script>

