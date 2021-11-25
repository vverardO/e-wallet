<x-layouts.base>
    <div class="min-h-full">
        <livewire:components.topnav />
        <main class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>
</x-layouts.base>