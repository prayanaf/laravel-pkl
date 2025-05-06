@extends('layouts.app')

@section('content')
    <h1>Dashboard Siswa</h1>
    <p>Selamat datang, {{ Auth::guard('siswa')->user()->nama ?? '' }}</p>
@endsection
