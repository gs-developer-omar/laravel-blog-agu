<x-app-layout meta-title="TheCodeHolic blog - About us page" meta-description="This is page about TheCodeHolic blog">
    <section class="w-full flex flex-col items-center px-3">

        <article class="w-full flex flex-col shadow my-4 rounded-full">
            <!-- Article Image -->
            <div class="flex justify-center bg-gray-200">
                <img src="/storage/{{ $widget->image }}" class="w-1/2 rounded-lg mt-5 mb-5">
            </div>
            <div class="bg-white flex flex-col justify-start p-6">
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title }}
                </h1>
                <div class="bg-gray-100 p-5 rounded-lg">
                    {!! $widget->content !!}
                </div>
            </div>
        </article>

    </section>
</x-app-layout>