@extends('layout.principal')

@section('conteudo')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label> E-mail </label>
                <input name="email" class="form-control  {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"/>
                @if( $errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label> Senha </label>
                <input type="password" name="password" class="form-control" />
                @if( $errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary" style="margin-right: 15px;">
                        Login
                    </button>

                    <a href="/password/email">Esqueceu sua senha?</a>

                    |

                    <a href="/registrar">Criar cadastrado</a>
{{--                    <a href="{{action('Auth\RegisterController@registrar')}}">Criar cadastrado</a>--}}
                </div>
            </div>
        </form>
    </div>
@stop
