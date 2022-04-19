@extends('layouts.master')

@section('content')

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								User Profile Student
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="{{$siswa->getAvatar()}}" />
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="/siswa/{{$siswa->id}}/edit">
															<i class="ace-icon fa fa-circle light-green"></i>
															&nbsp;
															<span class="white">{{$siswa->nama_depan}}&nbsp;{{$siswa->nama_belakang}}</span>
														</a>
													</div>
												</div>
											</div>

											<div class="space-6"></div>


											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">{{$siswa->mapel->count()}}</span>

													<br />
													Mata Pelajaran
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br />
													Following
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> Username </div>

													<div class="profile-info-value">
														<span class="editable" id="username">{{$siswa->nama_depan}}&nbsp{{$siswa->nama_belakang}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Address </div>

													<div class="profile-info-value">
														<i class="fa fa-map-marker light-orange bigger-110"></i>
														
														<span class="editable" id="alamat">{{$siswa->alamat}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Gender </div>

													<div class="profile-info-value">
														<span class="editable" id="gender">{{$siswa->jenis_kelamin}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Religion </div>

													<div class="profile-info-value">
														<span class="editable" id="agama">{{$siswa->agama}}</span>
													</div>
												</div>
											</div>

											<div class="space-20"></div>

											<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th>Kode</th>
														<th>Nama</th>
														<th>Semester</th>
														<th>Nilai</th>
												</thead>

												<tbody>
													@foreach ($siswa->mapel as $mapel)
													<tr>
														
														<th>{{$mapel->kode}}</a> </th>
														<th>{{$mapel->nama}}</a></th>
														<th>{{$mapel->semester}}</th>
														<th>{{$mapel->pivot->nilai}}</th>
													</tr>
													@endforeach
												</tbody>
											</table>
										</div>



											
										</div>
									</div>

								<div class="hide">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											<div class="well well-sm">
												<!-- -
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		&nbsp; -->
											</div><!-- /.well -->

											<div class="space"></div>

										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


@endsection

