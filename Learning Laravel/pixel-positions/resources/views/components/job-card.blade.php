@props(['job'])

<x-panel class="flex flex-col">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-7 text-center">
        <h3 class="group-hover:text-blue-800 text-xl font-bold transition-colors duration-300">{{ $job->title }}</h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between mt-auto">
        <div class="mt-auto">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>

        <x-employer-logo :width="42" />
    </div>
</x-panel>