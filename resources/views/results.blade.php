<x-layout>
    <x-page-heading>Results</x-page-heading>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>

        <div class="space-y-6">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        </div>
    </section>

</x-layout>
