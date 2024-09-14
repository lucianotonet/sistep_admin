<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="prose prose-sm mx-auto leading-normal dark:prose-invert">
            {!! Str::markdown(file_get_contents(base_path("CHANGELOG.md"))) !!}
        </div>
    </div>
</x-app-layout>
