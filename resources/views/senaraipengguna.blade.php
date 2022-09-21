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
					<table class="table text-md-nowrap data-table" id="example1">
                        {{-- <table class="table table-bordered data-table"> --}}
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

<!-- Modal effects -->
<div class="modal fade" id="modaldemo8">
    <form id="addUserForm" name="addUserForm">
        <input type="hidden" name="user_id" id="user_id">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">

                {{-- modal header --}}
                <div class="modal-header">
                    <h6 class="modal-title" id="modalHeading"></h6>
                    <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>

                {{-- modal body --}}
                <div class="modal-body">

                    {{-- nama pengguna --}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label">Nama Pengguna: <span class="tx-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" placeholder="masukkan nama pengguna" id="name" value="" required="">
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
                                <input type="password" class="form-control" name="password" id="password" value="" required="">
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
                                <input type="email" class="form-control" name="email" id="email" value="" required>
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
                                <input type="text" class="form-control" name="jabatan" id="jabatan" value="" required>
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
                                <input id="notelefon" type="text" class="form-control" name="notelefon" value="" required>
                            </div>
                        </div>
                    </div>
                </div> <!-- end of modal body -->

                {{-- footer --}}
                <div class="modal-footer">
                    <button type="submit" id="saveBtn" value="create" class="btn ripple btn-primary" >Simpan</button>
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
<script src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // display data
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('userlist2.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'jabatan', name: 'jabatan'},
            {data: 'notelefon', name: 'notelefon'},
            {data: 'action', name: 'action'},
        ]
    });

    // display modal when user click add button
    $('#createNewUser').click(function () {
        $('#saveBtn').val("create-user");
        $('#user_id').val();
        $('#addUserForm').trigger("reset");
        $('#modalHeading').html("Tambah Pengguna");
        $('#modaldemo8').modal('show');
    });

    // click edit button
    $('body').on('click', '.editBook', function() {
        var user_id = $(this).data('id');
        
        $.get("{{ route('userlist2.index') }}" + '/' + user_id + '/edit', function (data) {
            // dd(json_encode($data));
                $('#modalHeading').html("Kemaskini Pengguna");
                $('#saveBtn').val("edit-user");
                $('#modaldemo8').modal('show');
                $('#user_id').val(data.id);
                $('#name').val(data.name);
                $('#password').val(data.password);
                $('#email').val(data.email);
                $('#jabatan').val(data.jabatan);
                $('#notelefon').val(data.notelefon);
            })
    });

    // save new record
    $('#saveBtn').click(function (e) {
        
        e.preventDefault();
        $(this).html('Save');

        $.ajax({

            data: $('#addUserForm').serialize(),
            url: "{{ route('userlist2.store') }}",
            type: "POST",
            // headers: {'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')},
            dataType: 'json',
            success: function (data) {
                $('#addUserForm').trigger("reset");
                $('#modaldemo8').modal('hide');
                table.draw();
            },

            error: function (data) {
                console.log('Error:', data);
                // alert(data);
                $('#saveBtn').html('Simpan');
            }
        });

    });

    

});
</script>
@endsection


