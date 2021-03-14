@extends('base.main')

@section('title') User @endsection

@section('page_title') User @endsection

@section('breadcrumb')  
<li><span>User</span></li>
@endsection

@section('content')
<div class="col p-0 mb-3 text-right">
    @php
        renderActionMenu([
            'create' => ['url'=> route('register')]
        ]);
    @endphp
</div>
<section class="card">
    <header class="card-header">
        <h2 class="card-title">Card</h2>
    </header>
    <div class="card-body">
        <p>Lorem ipsum</p>
    </div>
</section>
@endsection