<div>
    show tweets
    <form action="" method="post" wire:submit.prevent="create"> 
        
        <input type="text" name="content" id="content" wire:model="content">
        @error('content') {{ $message }} @enderror
        <input type="submit" value="Criar Tweet">
    </form>
    <hr>

        @foreach($tweets as $tw)
            <p>{{ $tw->user['name'] }}: {{ $tw->content }}</p>
            @if($tw->likes->count())
            <a href="#" wire:click.prevent="unLike({{ $tw->id }})">Descurtir</a>
            @else
            <a href="#" wire:click.prevent="like({{ $tw->id }})">Curtir</a>
            @endif
            <br>
        @endforeach

    <hr>
    
    <div>
        {{ $tweets->links() }}
    </div>
</div>
