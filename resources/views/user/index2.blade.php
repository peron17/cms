@extends('base.main')

@section('title') User @endsection

@section('page_title') User @endsection

@section('breadcrumb')  
<li><span>User</span></li>
@endsection

@section('content')
<div class="col p-0 mb-3 text-right">
    <x-act-btn class="btn-primary" icon="fa-plus" label="Create" href="{{ route('register') }}" />
</div>
<x-card title="User">
    <p>Bla bla</p>
</x-card>
@endsection