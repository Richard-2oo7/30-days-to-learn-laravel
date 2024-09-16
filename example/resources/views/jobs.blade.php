<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <h1>Jobbss</h1>
<ul>
     @foreach($jobs as $job)
    <li>
        <a href="jobs/{{$job['id']}}">
            <strong>{{$job['name']}}:</strong> pays {{$job['salary']}}
        </a>
    </li>
    @endforeach
</ul>
</x-layout>