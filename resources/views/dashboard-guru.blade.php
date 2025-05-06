@extends('layouts.app')

@section('content')
    <h1>Dashboard Guru</h1>
    <p>Selamat datang, {{ Auth::guard('guru')->user()->nama ?? '' }}</p>
@endsection
