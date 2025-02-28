@props(['job'])

<x-panel class="flex gap-x-6">    
    <div class="mt-auto mb-auto">
        <x-employer-logo />
    </div>

    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-500">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-800 transition-colors duration-300">{{ $job->title }}</h3>

        <div class="mt-8">
            <p class="text-sm text-gray-500 mt-auto">{{ $job->salary }}</p>
        </div>
    </div>

    <div class="flex flex-col items-end">
        <div>
            <x-tag-transparent :tag="$job->schedule" size="small" />
        </div>

        <div class="mt-auto">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="small" />
            @endforeach
        </div>
    </div>
</x-panel>