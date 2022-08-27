@extends('layouts.mainlayout')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Halaman Utama</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Konfigurasi Pengguna</span>
        </div>
    </div>

	<div class="d-flex my-xl-auto right-content">
		{{-- <div class="pe-1 mb-xl-0">
			<button type="button" class="btn btn-success btn-icon me-2"><i class="icon ion-md-add-circle"></i></button>
		</div>

		<div class="pe-1 mb-xl-0">
			<button class="btn btn-primary-gradient btn-block"><i class="icon ion-md-add-circle"></i><span>Primary</span></button>
		</div> --}}

		<div class="pe-1 mb-xl-0">
			<button class="btn btn-success btn-with-icon btn-block"><i class="icon ion-md-add-circle"></i> Tambah</button>
		</div>

		{{-- <div class="mb-xl-0">
			<div class="btn-group dropdown">
				<button type="button" class="btn btn-primary">14 Aug 2019</button>
				<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span class="sr-only">Toggle Dropdown</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" x-placement="bottom-end">
					<a class="dropdown-item" href="#">2015</a>
					<a class="dropdown-item" href="#">2016</a>
					<a class="dropdown-item" href="#">2017</a>
					<a class="dropdown-item" href="#">2018</a>
				</div>
			</div>
		</div> --}}
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
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">

										{{-- <div class="btn-icon-list">
											<button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
										</div>

										<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
											<button class="btn btn-success btn-block">Success</button>
										</div> --}}

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

