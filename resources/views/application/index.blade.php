<x-layout>
    <h2 class="text-3xl text-center mb-4 font-bold border border-gray-300 p-3">
        Applied Jobs
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-3">
        @forelse($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p class="text-gray-500 text-center">
                You have no applied jobs.
            </p>
        @endforelse
    </div>
</x-layout>
