@extends('admin.admin_master')
@section('admin')



  
	  <div class="container-full">

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-primary-light rounded w-60 h-60">
								<i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">New Customers</p>
								<h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-warning-light rounded w-60 h-60">
								<i class="text-warning mr-0 font-size-24 mdi mdi-car"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sold Cars</p>
								<h3 class="text-white mb-0 font-weight-500">3400 <small class="text-success"><i class="fa fa-caret-up"></i> +2.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
								<h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-6">
					<div class="box overflow-hidden pull-up">
						<div class="box-body">							
							<div class="icon bg-info-light rounded w-60 h-60">
								<i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
							</div>
							<div>
								<p class="text-mute mt-20 mb-0 font-size-16">Sales Lost</p>
								<h3 class="text-white mb-0 font-weight-500">$1,250 <small class="text-danger"><i class="fa fa-caret-down"></i> -0.5%</small></h3>
							</div>
						</div>
					</div>
				</div>
				
				
				<div class="col-12">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title align-items-start flex-column">
								New Arrivals
								<small class="subtitle">More than 400+ new members</small>
							</h4>
						</div>
						<div class="box-body">
							<div class="table-responsive">
								<table class="table no-border">
									<thead>
										<tr class="text-uppercase bg-lightest">
											<th style="min-width: 250px"><span class="text-white">products</span></th>
											<th style="min-width: 100px"><span class="text-fade">pruce</span></th>
											<th style="min-width: 100px"><span class="text-fade">deposit</span></th>
											<th style="min-width: 150px"><span class="text-fade">agent</span></th>
											<th style="min-width: 130px"><span class="text-fade">status</span></th>
											<th style="min-width: 120px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-1.jpg') }}"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-primary-light badge-lg">Approved</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-2.jpg') }}"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-3.jpg') }}"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-success-light badge-lg">Success</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-4.jpg') }}"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-danger-light badge-lg">Rejected</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
										<tr>										
											<td class="pl-0 py-8">
												<div class="d-flex align-items-center">
													<div class="flex-shrink-0 mr-20">
														<div class="bg-img h-50 w-50" style="background-image: url({{ asset('backend/images/gallery/creative/img-5.jpg') }}"></div>
													</div>

													<div>
														<a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">Vivamus consectetur</a>
														<span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
													</div>
												</div>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45,800k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Paid
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													$45k
												</span>
											</td>
											<td>
												<span class="text-fade font-weight-600 d-block font-size-16">
													Sophia
												</span>
												<span class="text-white font-weight-600 d-block font-size-16">
													Pharetra
												</span>
											</td>
											<td>
												<span class="badge badge-warning-light badge-lg">In Progress</span>
											</td>
											<td class="text-right">
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
												<a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>  
				</div>
			</div>
		</section>
		<!-- /.content -->
	  </div>
  
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab" class="active">Chat</a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="{{ asset('backend/images/avatar/1.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="{{ asset('backend/images/avatar/2.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="{{ asset('backend/images/avatar/3.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="{{ asset('backend/images/avatar/4.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="{{ asset('backend/images/avatar/1.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="{{ asset('backend/images/avatar/2.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="{{ asset('backend/images/avatar/3.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="{{ asset('backend/images/avatar/4.jpg') }}" alt="...">
			  </a>
			  <div class="media-body">
				<p class="font-size-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey"><i class="ti-minus"></i></a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  

@endsection