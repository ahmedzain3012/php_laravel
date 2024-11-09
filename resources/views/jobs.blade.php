<x-layout>
    <x-slot:heading>
        Job List
    </x-slot:heading>
<h1>{{ $greeting }} from the Jobs Page.<h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">    
                    <strong>{{ $job['title'] }} :</strong>  pay a {{ $job['salary'] }} per a year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
