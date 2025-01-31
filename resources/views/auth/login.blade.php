@extends('layouts.app')

@section('content')
    <div class="pf-v6-c-background-image"
        style="--pf-v6-c-background-image--BackgroundImage: url(/assets/images/pf-background.svg)"></div>
    <div class="pf-v6-c-login">
        <div class="pf-v6-c-login__container">
            <header class="pf-v6-c-login__header">
                <img class="pf-v6-c-brand" src="/assets/images/PF-IconLogo.svg" alt="PatternFly Logo"
                    style="--pf-v6-c-brand--Height:48px;" />
            </header>
            <main class="pf-v6-c-login__main">
                <header class="pf-v6-c-login__main-header">
                    <h1 class="pf-v6-c-title pf-m-3xl">Inicia sesion con tu cuenta</h1>
                    <p class="pf-v6-c-login__main-header-desc">Bienvenido a {{ config('app.name', 'condoctl.services') }}
                    </p>
                </header>
                <div class="pf-v6-c-login__main-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login') }}" class="pf-v6-c-form" novalidate>
                        @csrf
                        <div class="pf-v6-c-form__helper-text" aria-live="polite">
                            <div class="pf-v6-c-helper-text pf-m-hidden">
                                <div class="pf-v6-c-helper-text__item pf-m-error" id="-helper">
                                    <span class="pf-v6-c-helper-text__item-icon">
                                        <i class="fas fa-fw fa-exclamation-circle" aria-hidden="true"></i>
                                    </span>
                                    <span class="pf-v6-c-helper-text__item-text">Invalid login credentials.</span>
                                </div>
                            </div>
                        </div>
                        <div class="pf-v6-c-form__group"><label class="pf-v6-c-form__label" for="login-demo-form-username">
                                <span class="pf-v6-c-form__label-text">Correo Electronico</span>&nbsp;<span
                                    class="pf-v6-c-form__label-required" aria-hidden="true">&#42;</span></label>

                            <span class="pf-v6-c-form-control pf-m-required">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}" required autofocus />
                            </span>
                        </div>
                        <div class="pf-v6-c-form__group"><label class="pf-v6-c-form__label" for="login-demo-form-password">
                                <span class="pf-v6-c-form__label-text">Contraseña</span>&nbsp;<span
                                    class="pf-v6-c-form__label-required" aria-hidden="true">&#42;</span></label>
                            <div class="pf-v6-c-input-group">
                                <span class="pf-v6-c-form-control pf-m-required">
                                    <input type="password" class="form-control" id="password" name="password" required />
                                </span>

                                <button class="pf-v6-c-button pf-m-control" type="button" aria-label="Show password">
                                    <span class="pf-v6-c-button__icon pf-m-start">
                                        <i class="fas fa-eye" aria-hidden="true"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="pf-v6-c-form__group pf-m-action">
                            <button class="pf-v6-c-button pf-m-block pf-m-primary" type="submit">
                                <span class="pf-v6-c-button__text">Log in</span>
                            </button>
                        </div>
                    </form>
                </div>


            </main>
            <footer class="pf-v6-c-login__footer">
                <p>This is placeholder text only. Use this area to place any information or introductory message about your
                    application that may be relevant to users.</p>
                <ul class="pf-v6-c-list pf-m-inline" role="list">
                    <li>
                        <a href="#">Terms of use</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                    <li>
                        <a href="#">Privacy policy</a>
                    </li>
                </ul>
            </footer>
        </div>
    </div>


@endsection
