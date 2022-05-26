@props(['post' => $post])
<link rel="stylesheet" href="{{ asset('css/text.css') }}">
<div class="mb-4">
    {{-- <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span> --}}
    <p>{{ $post->user->name }}  <span class="text-gray-600 text-sm">{{ $post->created_at; }}</span></p>
    <div class="box">
        <p class="pranesimas">{{ $post->body }}</p>
    </div>

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="istrinti">Ištrinti</button>
        </form>
    @endcan
    <div class="flex items-center">
        @auth
            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    <button type="submit" class="patinka">Patinka <img src="Images/like.png" style="width: 20px;"></button>
                </form>
            @else
                <form action="{{ route('posts.likes', $post) }}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="nepatinka">Nepatinka <img src="Images/dislike.png" style="width: 20px;"></button>
                </form>
            @endif
        @endauth

        <span>{{ $post->likes->count() }} {{ 'patinka', $post->likes->count() }}</span>
    </div>
</div>