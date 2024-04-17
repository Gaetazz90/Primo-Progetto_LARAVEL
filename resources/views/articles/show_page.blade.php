<x-layout>

    <div class="container-fluid min-vh-100">
        <div class="row mt-5 mb-3">
            <div class="col-12">
                <h3> DETTAGLIO ARTICOLO </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 ms-5">
                <h4> Caricato da: {{$article->user->name}}</h4>
                <p> <strong>Nome Articolo: </strong>{{$article->name}}</p>
                <p> <strong>Prezzo:</strong> {{$article->price}} €</p>
                <p> <strong>Categoria:</strong> {{$article->category}}</p>
                <p> <strong>Descrizione:</strong></p>
                <p> {{$article->description}}</p>
                @if($article->user == Auth::user())
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-color" href="{{route('edit_page', compact('article'))}}">Modifica articolo</a>
                    </div> 
                    <div class="col-6">
                        <form method="POST" action="{{route('delete_page', compact('article'))}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-color mb-5">Elimina Articolo</button>
                        </form>
                    </div> 
                </div> 
                @endif                  
            </div>
            <div class="col-6">
                <img src="{{Storage::url($article->img)}}" alt="img-articolo" class="img-showpage">
            </div>
        </div>
    </div>    

</x-layout>