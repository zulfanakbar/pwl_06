@extends('layouts.app')

@section('content')

<div class="card-body">
@if (session('status'))
<div class="alert alert-success" role="alert">
{{ session('status') }}
</div>
@endif

{{__(You are logged in!) }}

<table class="table table-responsive">
<tr><tr>Username</th><th>:</th><td>{{ $user->username }}</td></tr>
<tr><tr>Name</th><th>:</th><td>{{ $user->name }}</td></tr>
<tr><tr>Email</th><th>:</th><td>{{ $user->email }}</td></tr>
<tr><tr>Created At</th><th>:</th><td>{{ $user->created_at }}</td></tr>
</table>
</div>
@endsection
