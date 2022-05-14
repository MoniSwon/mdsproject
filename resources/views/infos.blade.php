@extends('template')
 
@section('contenu')
    <br>
    <div class="container">
        <div class="row card text-white bg-dark">
            <h4 class="card-header">Connexion</h4>
            <div class="card-body">
                <form action="{{ url('/admin/dashboard/home') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control  @error('identifiant') is-invalid @enderror" name="identifiant" id="identifiant" placeholder="Votre identifiant" value="{{ old('identifiant') }}">
                        @error('identifiant')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" placeholder="Votre password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-secondary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
@endsection
