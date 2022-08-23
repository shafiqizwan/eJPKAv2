@extends('layouts.mainlayout')
@section('content')

{{-- setiap new page mesti pakai div class --}}
<div class="main-content app-content">
    <!-- container -->
			<div class="container-fluid">

				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Halaman Utama</h4><span
								class="text-muted mt-1 tx-13 ms-2 mb-0">/ Senarai Pengguna</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->

				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">Senarai Pengguna</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">First name</th>
												<th class="wd-15p border-bottom-0">Last name</th>
												<th class="wd-20p border-bottom-0">Position</th>
												<th class="wd-15p border-bottom-0">Start date</th>
												<th class="wd-10p border-bottom-0">Salary</th>
												<th class="wd-25p border-bottom-0">E-mail</th>
											</tr>
										</thead>
										<tbody>



											<tr>
												<td>Zorita</td>
												<td>Serrano</td>
												<td>Software Engineer</td>
												<td>2017/06/01</td>
												<td>$115,000</td>
												<td>z.serrano@datatables.net</td>
											</tr>
											<tr>
												<td>Jennifer</td>
												<td>Acosta</td>
												<td>Junior Javascript Developer</td>
												<td>2017/02/01</td>
												<td>$75,650</td>
												<td>j.acosta@datatables.net</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->

</div>
@endsection

