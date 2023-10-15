<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Riwayat') }}
           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="px-4 sm:px-0">
    <!-- <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p> -->
    @if(session()->has('berhasil'))
            <div class="alert alert-success small-alert m-0 p-2 text-center" role="alert">{{session('berhasil')}}
            </div>
            @endif
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Nama</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->nama}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">NIK</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->nik}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Alamat</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->alamat}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Telepon</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->telepon}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Email</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->email}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Universitas</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->univ}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Instansi</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->institution->nama}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Mulai</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->mulai}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Selesai</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->selesai}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Keterangan dari Pelamar</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->keterangan}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Berkas</dt>
        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200" style="padding-right: 2rem;">
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <div>KTP:</div>
                  <a href="{{ route('download.ktp', ['filename' => $lamaran->berkasktp]) }}">
                    <span class="truncate font-medium">{{$lamaran->berkasktp}}</span>
                  </a>
                  <!-- <span class="flex-shrink-0 text-gray-400">2.4mb</span> -->
                </div>
              </div>
              <!-- <div class="mr-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div> -->
            </li>
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <div>KTM:</div>
                  <a href="{{ route('download.ktm', ['filename' => $lamaran->berkasktm]) }}">
                    <span class="truncate font-medium">{{$lamaran->berkasktm}}</span>
                  </a>
                  <!-- <span class="flex-shrink-0 text-gray-400">4.5mb</span> -->
                </div>
              </div>
              <!-- <div class="mr-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div> -->
            </li>
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <div>Permohonan:</div>
                  <a href="{{ route('download.permohonan', ['filename' => $lamaran->berkaspermohonan]) }}">
                    <span class="truncate font-medium">{{$lamaran->berkaspermohonan}}</span>
                  </a>
                  <!-- <span class="flex-shrink-0 text-gray-400">4.5mb</span> -->
                </div>
              </div>
              <!-- <div class="mr-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div> -->
            </li>
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <div>Proposal:</div>
                  <a href="{{ route('download.proposal', ['filename' => $lamaran->berkasproposal]) }}">
                    <span class="truncate font-medium">{{$lamaran->berkasproposal}}</span>
                  </a>
                  <!-- <button type="button" class="btn btn-primary m-2">Primary</button> -->
                  <!-- <span class="flex-shrink-0 text-gray-400">4.5mb</span> -->
                </div>
              </div>
              <!-- <div class="mr-4 flex-shrink-0">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div> -->
            </li>
          </ul>
        </dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->stat->nama}}</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Keterangan dari Admin</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$lamaran->keteranganadmin}}</dd>
      </div>
      @if(auth()->user()->admin)
      <div>
      <a href="/lamaran/{{$lamaran->id}}/edit" class="btn btn-primary m-2 float-end mb-3" style="width: 200px;">Edit</a>
      </div>
      @endif
    </dl>
  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
