<x-layout>
    <x-slot:heading>
        Job Detail
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <p><strong>Employer:</strong> {{ $job->employer->name }}</p>
</x-layout>
