<x-layout>
    <x-breadcrumbs :links="['Jobs' => route('jobs.index')]" class="mb-4" />
    <x-card class="mb-4 text-sm" x-data="">
        <form action="{{ route('jobs.index') }}" id="filtering-form" method="GET" x-ref="filters">

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 fint-semibold">
                        Search
                    </div>
                    <x-text-input form-ref="filters" name="search" placeholder="Search for any text"
                        value="{{ request('search') }}" />
                </div>
                <div>
                    <div class="mb-1 fint-semibold">
                        Salary
                    </div>
                    <div class="flex space-x-2">
                        <x-text-input form-ref="filters" name="min_salary" placeholder="From"
                            value="{{ request('min_salary') }}" />
                        <x-text-input form-ref="filters" name="max_salary" placeholder="To"
                            value="{{ request('max_salary') }}" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Experience</div>
                    <x-radio-group :options="array_combine(
                        array_map('ucfirst', \App\models\Job::$experience),
                        \App\models\Job::$experience,
                    )" name="experience" />
                </div>
                <div>
                    <div>
                        <div class="mb-1 font-semibold">Categories</div>
                        <x-radio-group :options="array_combine(
                            array_map('ucfirst', \App\models\Job::$category),
                            \App\models\Job::$category,
                        )" name="category" />
                    </div>
                </div>
            </div>
            <button
                class="w-full border rounded-md py-1 bg-slate-50 hover:bg-slate-100 shadow-sm transition active:translate-y-0.5">Filter</button>
        </form>
    </x-card>
    @foreach ($jobs as $job)
        <x-job-card :$job>
            <x-link-button :href="route('jobs.show', $job)">Show</x-link-button>
        </x-job-card>
    @endforeach
</x-layout>
