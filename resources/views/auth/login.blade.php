<x-layout>
    
    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-12">
                <h3> ACCEDI </h3>
            </div>
        </div>
        
        
        
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-4">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="/login">
                    @csrf
                    <div>
                        <label for="email" class="form-label">Indirizzo E-mail</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                        <span class="eye position-absolute end-0 top-50" id="eyeicon">
                            <i id="openeye" class="fa-solid fa-eye"></i>
                            <i id="closedeye" class="fa-solid fa-eye-slash" style="display: none"></i>
                        </span>
                     </div>  

                    <div class="mb-3 form-check">
                        <input name="remember" type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-color">Accedi</button>
                </form>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-center"><strong>Non sei ancora registrato?</strong><span><a href="{{route("register")}}">Clicca qui</a></span></p>
            </div>
        </div>
    </div>
    
</x-layout>