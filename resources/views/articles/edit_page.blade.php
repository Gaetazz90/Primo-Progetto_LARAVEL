<x-layout>
    
    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-12">
                <h3> MODIFICA IL TUO ARTICOLO </h3>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route('update_page', compact('article'))}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div>
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{$article->name}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{$article->price}}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="category">Seleziona una categoria</label>
                    <div class="form-floating mt-3">
                        <select name="category" class="form-select" id="category" aria-label="Scegli categoria">
                            <option selected></option>
                            <option @if($article->category == 'Abbigliamento') selected @endif value="Abbigliamento">Abbigliamento</option>
                            <option @if($article->category == 'Elettronica-Informatica') selected @endif value="Elettronica-Informatica">Elettronica-Informatica</option>
                            <option @if($article->category == 'Motori') selected @endif value="Motori">Motori</option>
                            <option @if($article->category == 'Arredamento') selected @endif value="Arredamento">Arredamento</option>
                            <option @if($article->category == 'Giardinaggio') selected @endif value="Giardinaggio">Giardinaggio</option>
                        </select>
                    </div>
                    </div>
                    @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="img" class="form-label mt-2 me-5">Immagine prodotto</label>
                        <img src="{{Storage::url($article->img)}}" alt="img-article-old" height="150px" width="200px" class="ms-5">
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="form-floating">
                        <textarea name="description" class="form-control mt-3" placeholder="Descrizione articolo" id="description" style="height: 200px">
                            {{$article->description}}</textarea>
                        <label for="description">Lascia una descrizione</label>
                    </div>
                    <button type="submit" class="btn btn-color mt-3 mb-5">Modifica Articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>