<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>
<h1>{{ $greeting }} from the Jobs Page.<h1>
    
<div class="space-y-4">
        
    @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $job->employer->name}}
                    </div>    
                <div>
                    <strong>{{ $job['title'] }} :</strong>  pay a {{ $job['salary'] }} per a year   
                </div>    
                
                </a>
            </li>
        @endforeach
</div>
</x-layout>
