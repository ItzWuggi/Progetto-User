<x-layout>
<div class="container">
    <div class="row my-5">
        @foreach($articles as $article)
        <div class="col-12 col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
              <p class="card-text">{{$article->body}}</p>
              <a href="{{route('article.show', compact('article'))}}" class="btn btn-success">Dettaglio dell'articolo</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>