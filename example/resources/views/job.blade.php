<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
<h2 class="text-lg font-bold">{{$job['name']}}</h2>
<p>this job pays {{$job['salary']}}</p>
</x-layout>