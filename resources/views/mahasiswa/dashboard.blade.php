<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-8">
            <h2 class="text-4xl text-gray-800 pb-6">Ide Project Agentic AI Anda</h2>
            <div class="flex flex-row">
                @foreach ( $projects as $project )
                <div class="max-w-sm bg-white border rounded-xl p-6 shadow-sm">
                    <h3 class="text-3xl font-bold pb-2"> {{ $project->judul }} </h3>
                    <p class="text-sm"> Tema: {{ $project->tema_agent }} </p>
                    <p> {{ $project->deskripsi }} </p>
                    <p> API key: {{ $project->api_key_secure }} </p>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>

    
    
        
    </table>
    
</x-app-layout>
