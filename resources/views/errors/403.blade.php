@extends('errors::custom-error')

@section('title', __('Akses Ditolak'))
@section('code', '403')
@section('message', __('Akses Ditolak. Anda tidak memiliki akses ke halaman ini.'))
<!-- @section('message', __($exception->getMessage() ?: 'Akses Ditolak. Hubungi admin jika membutuhkan izin.')) -->
