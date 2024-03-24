@if (Auth::user()->is_favorites($micropost->id))
        {{-- Unfavoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', ['id' => $micropost->id]) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error normal-case" 
                onclick="return confirm('このmicropost のお気に入りを外します。よろしいですか？')">Unfavorite</button>
        </form>
    @else
        {{-- お気に入りボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', ['id' => $micropost->id]) }}">
            @csrf
            <button type="submit" class="btn btn-primary normal-case">Favorite</button>
        </form>
@endif
