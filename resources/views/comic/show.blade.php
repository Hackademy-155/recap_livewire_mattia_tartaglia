<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
               <h2>{{$comic->title}}</h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($comic->image)}}" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-6">
                <h4>{{$comic->author}}</h4>
            </div>
            <div class="col-12 col-md-6">
                <p>Added by: {{$comic->user->name}}, {{$comic->created_at->format('d/m/Y')}}</p>
            </div>
        </div>
    </div>
</x-layout>