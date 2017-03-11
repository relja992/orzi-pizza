@extends('admin.layout.admin')
@section('content')
    <h3>Zdravo {{ Auth::user()->name }}</h3>
@endsection