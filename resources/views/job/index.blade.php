<x-layout>
    <h2>Jobs list:</h2>
    @foreach($jobs as $job)
        <a href={{route('jobs.show', $job->id)}}>{{$job->title}}</a></br>
    @endforeach
</x-layout>
