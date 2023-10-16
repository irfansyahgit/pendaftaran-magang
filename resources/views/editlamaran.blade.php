<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  <form action="/lamaran/{{$lamaran->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                  <h6 class="mb-4">Edit</h6>
                    <div class="row mb-3">
                        <label for="stat" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <!-- <input value="{{$lamaran->stat->nama}}" type="text" class="form-control" id="stat" name="stat"> -->
                            <select class="form-select mb-3" aria-label="Default select example" name="stat">
                                <option disabled>-- Pilih Status --</option>
                                @foreach($stats as $stat)
                                <option value="{{$stat->id}}" {{ $stat->id == $lamaran->stat_id ? 'selected' : '' }}>{{$stat->nama}}</option>
                                @endforeach
                            </select>
                            @error('stat')
                            <div class="alert alert-danger small-alert m-0 p-2" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="keteranganadmin" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" id="keteranganadmin" name="keteranganadmin" style="height: 150px;">{{$lamaran->keteranganadmin}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-end mb-3" style="width: 200px;">Simpan Perubahan</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
