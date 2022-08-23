@extends('layouts.mainlayout')
@section('content')

{{-- setiap new page mesti pakai div class --}}
<div class="main-content app-content">
    <!-- container -->
    <div class="container-fluid">
        <div class="row">
            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>
                    @endif

                    {{ __('You are logged in! ') }}
                    {{ $name }}
        </div>
    </div>
</div>


@endsection

