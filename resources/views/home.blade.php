@extends('layouts.mainlayout')
@section('content')

<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ Empty</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->

<div class="row">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}

        </div>
    @endif

    {{ __('You are logged in! ') }}
    {{ $name }}
</div>

@endsection

