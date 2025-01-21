<div class="card">
    <img src="{{Storage::url($recipe->image)}}" alt="immagine della ricetta" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{$recipe->title}}</h5>
        <p class="card-text">categoria: {{$recipe->category->name ?? 'non specificata'}}</p>
        <a href="" class="btn btn-primary">Leggi</a>
    </div>
</div>
