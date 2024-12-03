<div>
    @if (session('message'))
        <div class="alert-success">
            {{session('message')}}
        </div>
    @endif
    <form wire:submit="store" >
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" wire:model="author">
            @error('author')
            <p class="text-danger">{{$message}}</p>
        @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Copertina</label>
            <input type="file" class="form-control" id="image" wire:model="image">
            @error('image')
            <p class="text-danger">{{$message}}</p>
        @enderror
        @if ($image)
            <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
        @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
