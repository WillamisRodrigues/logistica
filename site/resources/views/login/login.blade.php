@extends('layouts.app')

@section('title','Login | Logistica')

@section('content')
    <!-- Main content-->
    <section>
        <div class="container-center animated slideInDown">
            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                       realize seu login
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="index.html" id="loginForm" novalidate="">
                        <div class="form-group">
                            <label class="col-form-label" for="username">Usuario</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="form-text small">seu usuario</span>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="password">Senha</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="form-text small">sua senha</span>
                        </div>
                        <div>
                            <button class="btn btn-accent">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->
@endsection