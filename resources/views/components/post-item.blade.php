<article class="bg-white flex flex-col shadow my-4">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}">
        <img src="{{ $post->getThumbnail() }}">
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach($post->categories as $category)
                <a href="{{ route('by-category', $category) }}" class="text-blue-700 text-sm font-bold uppercase pb-4 hover:text-blue-200">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <a href="{{ route('view', $post) }}" class="text-3xl font-bold hover:text-gray-700 pb-4 hover:underline">
            {{ $post->title }}
        </a>
        <p class="text-sm pb-3">
            By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>, Published
            on {{ $post->getFormattedDate() }}
        </p>
        <a href="{{ route('view', $post) }}" class="pb-6">
            {{ $post->shortBody() }}
        </a>
        <a href="{{ route('view', $post) }}" class="uppercase text-gray-800 hover:text-black">Продолжить чтение <i class="fas fa-arrow-right"></i></a>
    </div>
</article>