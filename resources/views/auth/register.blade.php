<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Registrar</title>

        <!--  Paleta de colores  -->
        <link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.3/css/bootstrap.min.css') }}">
        
        <!-- FontAwesime Icons  -->
        <link rel="stylesheet" href="{{ asset('assets/icons/fontawesome-free-6.7.2-web/css/all.min.css') }}">
    </head>
    <body>
        <div class="container-fluid min-vh-100 d-flex align-items-center">
            <div class="row justify-content-center w-100">
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="card p-4 shadow rounded">
                        <div class="text-center mb-3">
                            <a href="{{ route('public_home') }}" class="text-decoration-none text-dark">
                                <img src="assets/images/logo.webp" alt="Logo" width="48" height="48" class="mb-2">
                                <h5 class="mb-0">Fut-App</h5>
                            </a>
                        </div>

                        <div class="text-center mb-3">
                            <strong>Registrar</strong><br>
                            <small>¿Ya tienes una cuenta? <a href="{{ route('register') }}">Click aquí</a></small>
                        </div>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <!-- Name -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input class="form-control"
                                    id="name" 
                                    type="text" 
                                    name="name" :value="old('name')" 
                                    placeholder="Nombre"
                                    required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-at"></i>
                                </span>
                                <input class="form-control"
                                    id="email" 
                                    type="email" 
                                    name="email" :value="old('email')" 
                                    placeholder="Email"
                                    required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input class="form-control" 
                                    id="password"
                                    type="password"
                                    name="password"
                                    placeholder="Contraseña"
                                    required autocomplete="current-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="input-group mb-3">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input class="form-control" 
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    placeholder="Confirmar contraseña"
                                    required />
                            </div>

                            <div class="d-grid mb-2">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>