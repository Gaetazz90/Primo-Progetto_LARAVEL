<x-layout>
    
    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-12">
                <h3> CARICA IL TUO ARTICOLO </h3>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">
                <form method="POST" action="{{route("store_page")}}" enctype="multipart/form-data">
                    
                    @csrf
                    <div>
                        <label for="name" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="text" class="form-control" id="price" value="{{old('price')}}">
                    </div>
                    @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="category">Seleziona una categoria</label>
                    <div class="form-floating mt-3">
                        <select name="category" class="form-select" id="category" aria-label="Scegli categoria">
                            <option selected>{{old('category')}}</option>
                            <option value="Abbigliamento">Abbigliamento</option>
                            <option value="Elettronica-Informatica">Elettronica-Informatica</option>
                            <option value="Motori">Motori</option>
                            <option value="Arredamento">Arredamento</option>
                            <option value="Giardinaggio">Giardinaggio</option>
                        </select>
                    </div>
                    </div>
                    @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div>
                        <label for="img" class="form-label mt-2">Immagine prodotto</label>
                        <input name="img" type="file" class="form-control" id="img">
                    </div>
                    <div class="form-floating">
                        <textarea name="description" class="form-control mt-3" placeholder="Descrizione articolo" id="description" style="height: 200px">
                        {{old('description')}}</textarea>
                        <label for="description">Lascia una descrizione</label>
                    </div>
                    
                    <button type="submit" class="btn btn-color mt-3">Crea Articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>