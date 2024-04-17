<x-layout>
    
    <div class="container-fluid min-vh-100 bg-home">
        <div class="row mb-5">
            <div class="col-12 mt-3">
                <h1> Benvenuto nel nostro e-commerce </h1>
            </div>
            @if (session('status'))
            <div class="alert alert-success col-4 mx-auto">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="row flex-wrap mt-5 ms-5">
            <h3> Ultimi articoli caricati dai nostri utenti</h3>
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
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
            </div>    
            @endforeach
        </div>
    </div>
    
</x-layout>
