@extends('layouts.mainlayout2')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Halaman Utama</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Konfigurasi Agensi</span>
        </div>
    </div>

    {{-- button trigger modal --}}
	<div class="d-flex my-xl-auto right-content">
		<div class="pe-1 mb-xl-0">
			<button id="createNewUser" class="modal-effect btn btn-success btn-with-icon btn-block" data-bs-effect="effect-scale" data-bs-target="#modaldemo8" data-bs-toggle="modal"><i class="icon ion-md-add-circle"></i> Tambah</button>
		</div>
	</div>
</div>
<!-- breadcrumb -->

<!-- row opened -->
<div class="row row-sm">
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table text-md-nowrap" id="example1">
                        <thead>
                            <tr>
                                <th class="wd-5p border-bottom-0">Bil</th>
								<th class="wd-10p border-bottom-0">Nama</th>
								<th class="wd-10p border-bottom-0">Emel</th>
								<th class="wd-10p border-bottom-0">Jabatan</th>
								<th class="wd-5p border-bottom-0">No. Telefon</th>
                                <th class="wd-10p border-bottom-0">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /row -->

@endsection

@section('script-custom')
<script>

    $(document).ready(function () {

        fetchagensi();

        function fetchagensi() {
            $.ajax({
                type: "GET",
                url: "/fetchagensi",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('tbody').html("");
                    $.each(response.users, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>' + item.id + '</td>\
                            <td>' + item.name + '</td>\
                            <td>' + item.email + '</td>\
                            <td>' + item.jabatan + '</td>\
                            <td>' + item.notelefon + '</td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm">Edit</button><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm">Delete</button></td>\
                        \</tr>');
                    });
                }
            });
        }

    });
</script>
@endsection
