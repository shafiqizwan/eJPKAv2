@extends('layouts.mainlayout2')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Halaman Utama</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Konfigurasi Pengguna</span>
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
								<th class="wd-15p border-bottom-0">Emel</th>
								<th class="wd-15p border-bottom-0">Jabatan</th>
								<th class="wd-10p border-bottom-0">No. Telefon</th>
								{{-- <th class="wd-25p border-bottom-0">E-mail</th> --}}
							</tr>
						</thead>

						<tbody>
						{{-- @foreach ($pengguna as $user)
							<tr>
								<td>{{ $loop->index+1 }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->jabatan }}</td>
								<td>{{ $user->notelefon }}</td>
							</tr>
						@endforeach --}}
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal effects -->
<div class="modal fade" id="modaldemo8">
    <form action="" id="addProductForm">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title" id="modalHeading"></h6>
                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {{-- <div class="errMsgContainer"> --}}
                        <div class="col-md-3" id="errMsgContainer">
                            {{-- <label class="form-label">Nama Pengguna: <span class="tx-danger">*</span></label> --}}
                        </div>

                    {{-- nama pengguna --}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Nama Pengguna: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                    </div>

                    {{-- password --}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Kata Laluan: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                    </div>

                    {{-- emel --}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Emel: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" id="email">
                            </div>

                        </div>
                    </div>

                    {{-- jabatan --}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Jabatan/Bahagian: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="jabatan" id="jabatan">
                            </div>
                        </div>
                    </div>

                    {{-- no telefon --}}
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Nombor Telefon Pejabat</label>
                            </div>
                            <div class="col-md-9">
                                <input id="notelefon" type="text" class="form-control" name="notelefon">
                            </div>
                        </div>
                    </div>



                </div> <!-- end of modal body -->

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="button" id="postSubmitBtn" class="btn ripple btn-primary add_user" >Simpan</button>
                    <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">Kembali</button>

                    <div class="btn ripple btn-success-gradient" id='swal-success-kemaskini' hidden="hidden">
                        Click me !
                    </div>
                </div> <!-- end of footer -->
            </div>
        </div>
    </form>
</div>
<!-- End Modal effects-->

<!--End Large Modal -->
@endsection

@section('script-custom')
{{-- <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script type="text/javascript">
// $(document).ready(function () {

//     $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//     });

//     // alert('hahaha');
//     $(document).on('click', '.add_user', function(e){
//         e.preventDefault();
//         let name = $('#name').val();
//         let email = $('#email').val();
//         // console.log(name+email);

//         $.ajax({
//             type: "post",
//             // headers: {
//             //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             // },
//             url:"{{ route('add.user') }}",
//             // method:'post',
//             data:{name:name,
//                 email:email
//             },
//             success:function(res){
//                 console.log('success' + res);

//             },error:function(err){
//                 let error = err.responseJSON;
//                 $.each(err.errors,function(index, value){
//                     $('.errMsgContainer').append('<span class="text-danger">'+value+'</span>'+'<br>');

//                 });
//             }
//         });
//     })
// });

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var table = $('.example1').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('books.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'author', name: 'author'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#createNewUser').click(function () {
        $('#modalHeading').html("Create New User By Jquery");
        $('#modaldemo8').modal('show');

    });

});
</script>
@endsection


