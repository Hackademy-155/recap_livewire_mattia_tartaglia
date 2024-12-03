<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2>Index</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @forelse ($comics as $comic)
            <div class="col-12 col-md-6">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($comic->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <h5 class="card-title">{{$comic->author}}</h5>
                        <a href="{{route('comic.show', $comic)}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @empty
            <h3>Nessun fumetto da visionare</h3>
            @endforelse
        </div>
    </div>
</x-layout>