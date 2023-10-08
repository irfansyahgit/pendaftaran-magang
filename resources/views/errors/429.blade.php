@extends('errors::custom-error')

@section('title', __('Terlalu Banyak Permintaan'))
@section('code', '429')
@section('message', __('Terlalu Banyak Permintaan. Mohon tunggu sejenak.'))
