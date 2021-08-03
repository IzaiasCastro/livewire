<div>
    show tweets
    {{$message}}

    <input type="text" name="message" id="message" wire:model="message">

    <hr>

    @foreach($tweets as $tw)
        <p>{{ $tw->user['name'] }}: {{ $tw->content }}</p>
    @endforeach
</div>
