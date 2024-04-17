<x-layout>

    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-12">
                <h3> TUTTI GLI ARTICOLI </h3>
            </div>
        </div>
        
        @if (session('status'))
            <div class="alert alert-success col-4 mx-auto">
                {{ session('status') }}
            </div>
        @endif

        <div class="row flex-wrap justify-content-center mb-3">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card card-articles mb-3">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top img-card" alt="img-article">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->name}}</h5>
                      <p class="card-text">{{$article->price}}</p>
                      <p class="card-text">{{$article->category}}</p>
                      <p class="card-text">{{$article->description}}</p>
                      <a href="{{route('show_page', compact('article'))}}" class="btn btn-color">Vedi articolo</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>    

</x-layout>