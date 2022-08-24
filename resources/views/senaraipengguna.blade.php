@extends('layouts.mainlayout')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Halaman Utama</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Senarai Pengguna</span>
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
												<th class="wd-5p border-bottom-0">Bil</th>
												<th class="wd-10p border-bottom-0">Nama</th>
												<th class="wd-15p border-bottom-0">Emel</th>
												<th class="wd-15p border-bottom-0">Jabatan</th>
												<th class="wd-10p border-bottom-0">No. Telefon</th>
												{{-- <th class="wd-25p border-bottom-0">E-mail</th> --}}
											</tr>
										</thead>
										<tbody>
                                            @foreach ($pengguna as $user)
											<tr>
												<td>{{ $loop->index+1 }}</td>
												<td>{{ $user->name }}</td>
												<td>{{ $user->email }}</td>
												<td>{{ $user->jabatan }}</td>
												<td>{{ $user->notelefon }}</td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->
				</div>
				<!-- /row -->

@endsection

