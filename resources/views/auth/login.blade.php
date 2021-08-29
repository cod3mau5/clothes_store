@extends('layouts.app')

@section('content')

<div class="columns mx-0">
    <div class="column is-half is-offset-one-quarter">

        <form method="POST" class="box" action="{{ route('login') }}">
            @csrf
            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input id="email"
                        type="email"
                        class="input @error('email') is-danger @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                        placeholder="e.j. nombre@gmail.com">

                @error('email')
                    <span class="has-text-danger" role="alert">
                        <strong class="has-text-danger">{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>

            <div class="field">
              <label class="label">Contraseña</label>
              <div class="control">
                <input id="password"
                        type="password"
                        class="input @error('password') is-danger @enderror"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="********">

                    @error('password')
                        <span class="has-text-danger" role="alert">
                            <strong class="has-text-danger">{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
            </div>


                <div class="field">
                    <div class="buttons">
                        <button type="submit" class="button is-primary is-fullwidth">
                            Iniciar Sesión
                        </button>
                    </div>
                </div>

                <div class="field">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Olvido su contraseña?
                        </a>
                    @endif
                </div>

        </form>
    </div>
</div>


@endsection
