
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
                        <h3 class="card-label">Edit Data User</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_user')?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<!--begin::Form-->
				<?= $this->session->flashdata('msg_email');?>
				<form action="<?= site_url('Master_user/proses_edit_data')?>" method="POST">
				<div class="card-body">
				<input type="hidden" class="form-control"  value="<?= $user->user_id;?>"  name="id" required/>
				<div class="form-group">
					<label>Nama User <span class="text-danger">*</span></label>
					<input type="text" class="form-control"  value="<?= $user->nama_user;?>"  name="nama" required/>
				</div>
				<div class="form-group">
					<label>No-Telpon <span class="text-danger">*</span></label>
					<input type="number" class="form-control"  value="<?= $user->no_telp;?>"  name="no-telp" required/>
				</div>
				<div class="form-group">
					<label>Email address <span class="text-danger">*</span></label>
					<input type="email" class="form-control"  value="<?= $user->email_user;?>"  name="email" required/>
				</div>
				<div class="form-group">
					<label for="exampleSelect1">Jabatan<span class="text-danger">*</span></label>
					<select class="form-control" name="jabatan" required >
					<option <?php if($user->jabatan == '1' ): ?> selected <?php endif?> value="1">Supervisor</option>
					<option <?php if($user->jabatan == '2' ): ?> selected <?php endif?> value="2">Engineer</option>
					<option <?php if($user->jabatan == '3' ): ?> selected <?php endif?> value="3">QC</option>
					<option <?php if($user->jabatan == '4' ): ?> selected <?php endif?> value="4">Admin</option>
					<option <?php if($user->jabatan == '5' ): ?> selected <?php endif?> value="5">Gudang</option>
					</select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
					<input type="password" class="form-control" placeholder="*******"  name="password" id="password" disabled/>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-9">
					  <div class="form-check">
					    <input class="form-check-input" onclick="myFunction(!this.checked)" type="checkbox" value="" id="defaultCheck1">
					    <label class="form-check-label" for="defaultCheck1">
					      <span>Centang untuk mengubah password Anda!</span>
					    </label>
					  </div>
					</div>
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

<script>
function myFunction(status) {
    // var x = $('#cek').val();
    status != status
      document.getElementById("password").disabled = status;
      document.getElementById("password").value = "";
    // var x = document.getElementById("password");
    // x.disabled = true;
}
</script>
