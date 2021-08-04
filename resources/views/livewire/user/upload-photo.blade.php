<div>
    <h1>Upload Photo</h1>
    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        @error('photo') {{$message}} @enderror
        <input type="file"  wire:model="photo">
        <button type="submit">Upload Photo</button>
    </form>
</div>
