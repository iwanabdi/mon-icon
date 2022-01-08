
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
                        <h3 class="card-label">Add Team Mitra</h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="<?= site_url('Master_team/detail/'.$user->mitra_id)?>" class="btn btn-light-danger font-weight-bolder">
                        <i class="fas fa-backspace"></i>Back</a>
                        <!--end::Button-->
                    </div>
                </div>
				<div class="card-body">
					<!--begin::Form-->
					<form action="<?= site_url('Master_team/add_teamlap')?>" method="POST">
						<div class="form-group">
							<label>Mitra <span class="text-danger">*</span></label>
							<div class="input-group">
							<input type="hidden" class="form-control" name="mitra_id" id="mitra_id" required value="<?=$user->mitra_id?>">
							<input type="text" class="form-control" name="nama_mitra" id="nama_mitra" readonly value="<?=$user->nama_mitra?>">
								<!-- <div class="input-group-append">
									<button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#pilihmitra" data-backdrop="static" data-keyboard="false"><i class="fas fa-search"></i>
									</button>
								</div> -->
							</div>
						</div>
						<div class="form-group">
							<label>Nama Team <span class="text-danger">*</span></label>
							<input type="text" class="form-control" name="nama" required/>
						</div>
						<div class="form-group">
							<label>Pekerja <span class="text-danger">*</span></label>
							<textarea class="form-control" name="pekerja" rows="2" required></textarea>
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

<!-- Modal mitra-->
<div class="modal fade" id="pilihmitra" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Pilih Mitra</h5>
        <button class="btn btn-light-danger" type="button" data-dismiss="modal" aria-label="Close">
			<i class="far fa-window-close text-danger"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
              <thead>
              <tr class="text-center">
                <th>Nama Mitra</th>
                <th>Pilih</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <?php foreach($mitrapil->result() as $i => $data1)  {?>
                <td><?=$data1->nama_mitra?></td>
                <td class="text-center">
					<button class="btn btn-info" id="select1"
					data-id="<?= $data1->mitra_id?>"
					data-nama="<?= $data1->nama_mitra?>">Pilih
					</button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script>
    $(document).ready(function() {
		$(document).on('click', '#select1', function() {
		//   var customer_id = $(this).data('id');
		//   var nama_customer = $(this).data('nama');
		//   $('#mitra_id').val(customer_id);
		//   $('#nama_mitra').val(nama_customer);
		$('#pilihmitra').modal('hide');
		})
  })
</script> -->
<!-- Akhir Modal mitra Data -->
