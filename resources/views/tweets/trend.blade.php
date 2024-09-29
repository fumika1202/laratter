<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Tweetトレンド') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <h3 class="text-xl font-bold mb-4">トレンドツイート</h3>

          @if ($tweets->isEmpty())
            <p>現在、トレンドとなっているツイートはありません。</p>
          @else
            @foreach ($tweets as $tweet)
              <div class="tweet mb-4">
                <p>{{ $tweet->content }}</p>
                <p>いいね数: {{ $tweet->likes_count }}</p>
                <p>投稿者: {{ $tweet->user->name }}</p>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
