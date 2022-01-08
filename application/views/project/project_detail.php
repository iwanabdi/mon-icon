<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xxl-12">
			<!--begin::Card-->
			<div class="card card-custom">
				<div class="card-header card-header-tabs-line">
					<div class="card-toolbar">
						<ul class="nav nav-tabs nav-bold nav-tabs-line">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_3">
									<span class="nav-icon">
										<i class="far fa-eye"></i>
									</span>
									<span class="nav-text">Detail Project</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_3">
									<span class="nav-icon">
										<i class="fas fa-map"></i>
									</span>
									<span class="nav-text">Survey</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_3">
									<span class="nav-icon">
										<i class="fas fa-notes-medical"></i>
									</span>
									<span class="nav-text">Testcom</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#kt_tab_pane_4_3">
									<span class="nav-icon">
										<i class="far fa-file-alt"></i>
									</span>
									<span class="nav-text">Laporan</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="card-title d-flex flex-column ">
						<h3 class="card-label"><?= $project->project_id;?></h3>
						<h3 class="card-label">
							<?php if($project->status_project ==1){ echo "Disposisi";}
							elseif($project->status_project ==2){echo "Survey";}
							elseif($project->status_project ==3){echo "Penarikan";}
							elseif($project->status_project ==4){echo "Testcom";}
							elseif($project->status_project ==5){echo "Administrasi";}
							?>
						</h3>
					</div>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_3">
							<div class="row">
							<div class="col-xl-6">
							<!--begin::List Widget 1-->
								<div class="card card-custom card-stretch gutter-b">
									<!--begin::Body-->
									<div class="card-body pt-8">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Customer</a>
												<span class="text-muted"><?= $project->pelanggan;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Alamat</a>
												<span class="text-muted"><?= $project->alamat;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">SID</a>
												<span class="text-muted"><?= $project->sid;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">IO</a>
												<span class="text-muted"><?= $project->io;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-2">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Layanan </a>
												<span class="text-muted"><?= $project->layanan;?>  <?= $project->bandwith;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::List Widget 1-->
							</div>
							<div class="col-xl-6">
							<!--begin::List Widget 1-->
								<div class="card card-custom card-stretch gutter-b">
									<!--begin::Body-->
									<div class="card-body pt-8">
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Manager</a>
												<span class="text-muted"><?= $project->user_id;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Mitra</a>
												<span class="text-muted"><?= $project->mitra_id;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Dispose Date</a>
												<span class="text-muted"><?= $project->create_on;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Keteragan</a>
												<span class="text-muted"><?= $project->keterangan;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kendala</a>
												<span class="text-muted"><?= $project->kendala_id;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="d-flex align-items-center mb-10">
											<!--begin::Text-->
											<div class="d-flex flex-column font-weight-bold">
												<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Detail Kendala</a>
												<span class="text-muted"><?= $project->detail_kendala;?></span>
											</div>
											<!--end::Text-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::List Widget 1-->
							</div>
							</div>
						</div>
						<div class="tab-pane fade" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">Aldus PageMaker including versions lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
						<div class="tab-pane fade" id="kt_tab_pane_3_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">Aldus PageMaker including versions lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
						<div class="tab-pane fade" id="kt_tab_pane_4_3" role="tabpanel" aria-labelledby="kt_tab_pane_3_3">Aldus PageMaker including versions lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
					</div>
				</div>
			</div>
			<!--end::Card-->
			</div>
		</div>
		<!--end::Row-->
	</div>
	<!--end::Container-->
</div>
<!--end::Entry-->
</div>
