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
                  <div class="list-group">
                  @if(count($lamarans) > 0)
                    @foreach($lamarans as $lamaran)
                    <a href="/lamaran/{{$lamaran->id}}" class="list-group-item list-group-item-action">Anda telah melamar di  
                    <strong>{{$lamaran->lokasi}}</strong> pada {{$lamaran->created_at->format('j/n/Y')}}
                    </a>
                    @endforeach
                    @else
                    Anda belum mengirimkan lamaran
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
