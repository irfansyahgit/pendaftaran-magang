<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lamaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action="/lamaran" method="post" enctype="multipart/form-data">
                    @csrf
                  <h6 class="mb-4">Identitas</h6>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input value="{{old('nama')}}" type="text" class="form-control" id="nama" name="nama">
                            @error('nama')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input value="{{old('nik')}}" type="number" class="form-control" id="nik" name="nik">
                            @error('nik')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input value="{{old('alamat')}}" type="text" class="form-control" id="alamat" name="alamat">
                            @error('alamat')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                            <input value="{{old('telepon')}}" type="number" class="form-control" id="telepon" name="telepon">
                            @error('telepon')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input value="{{old('email')}}" type="email" class="form-control" id="email" name="email">
                            @error('email')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="univ" class="col-sm-2 col-form-label">Asal Universitas</label>
                        <div class="col-sm-10">
                            <input value="{{old('univ')}}" type="text" class="form-control" id="univ" name="univ">
                            @error('univ')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi/Tempat Magang</label>
                        <div class="col-sm-10">
                            <input value="{{old('lokasi')}}" type="text" class="form-control" id="lokasi" name="lokasi">
                            @error('lokasi')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mulai" class="col-sm-2 col-form-label">Tanggal Mulai Magang</label>
                        <div class="col-sm-10">
                        <input value="{{$tanggalSekarang}}" type="text" class="form-control" name="mulai" id="mulai" style="background-color: white;">
                        @error('mulai')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="selesai" class="col-sm-2 col-form-label">Tanggal Selesai Magang</label>
                        <div class="col-sm-10">
                        <input value="{{old('selesai')}}" type="text" class="form-control" name="selesai" id="selesai" style="background-color: white;">
                        @error('selesai')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>                 
                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="keterangan" name="keterangan" style="height: 150px;">{{old('keterangan')}}</textarea>
                        </div>
                    </div>
                  <h6 class="mb-4">Berkas</h6>
                    <div class="row mb-3">
                        <label for="berkasktp" class="col-sm-2 col-form-label">KTP</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="berkasktp" name="berkasktp" style="background-color: white;">
                          @error('berkasktp')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="berkasktm" class="col-sm-2 col-form-label">KTM</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="berkasktm" name="berkasktm" style="background-color: white;">
                          @error('berkasktm')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="berkaspermohonan" class="col-sm-2 col-form-label">Permohonan/Pengantar</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="berkaspermohonan" name="berkaspermohonan" style="background-color: white;">
                          @error('berkaspermohonan')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="berkas-proposal" class="col-sm-2 col-form-label">Proposal</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="berkasproposal" name="berkasproposal" style="background-color: white;">
                          @error('berkasproposal')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mb-3" style="width: 200px;">Kirim</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
