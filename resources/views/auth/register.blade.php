<x-layout>
    
    <div class="container-fluid min-vh-100">
        <div class="row mt-5">
            <div class="col-12">
                <h3> REGISTRATI </h3>
            </div>
        </div>
        
        <div class="row justify-content-center mt-3">
            <div class="col-12 col-md-6">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Utente</label>
                        <input name="name" type="text" class="form-control" id="name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo E-mail</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control" id="confirmpassword">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-color">Registrati</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>