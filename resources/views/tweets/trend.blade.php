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
                @foreach ($tweets as $index => $tweet)
                <div class="tweet" style="margin-bottom: 20px;">
                 <h1 style="font-size: 1.5em;">{{ $index + 1 }}位</h1>  
                  <p>{{ $tweet->tweet }}</p> 
                   <p>いいね数: {{ $tweet->likes_count }}</p>
                    <p>投稿者: {{ $tweet->user_name }}</p> 
                </div>
              @endforeach     
            @endif
         </div>
       </div>
    </div>
  </div>
</x-app-layout>
