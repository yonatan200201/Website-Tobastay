@extends('layouts.main-no-nav')

@section('title', 'Daftar')

@section('addCSS')
<link rel="stylesheet" href="{{ asset('bootstrap/css/login-style.css') }}">
@endsection

@section('wrapper')
<div class="col-lg-12">
    <div class="sl-container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('login') }}" method="POST" class="sign-in-form" autocomplete="off">
                    @csrf
                    <h2 class="title">Login</h2>

                    <div class="form-group">
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" aria-describedby="emailHelp">
                        </div>
                        @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" class=" @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input class="sl-btn solid" type="submit" value="Login" />
                    <a href="" class="nav-link">Lupa Password?</a>
                </form>
                    <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                        @csrf
                        <h2 class="title">Daftar</h2>
                        <div class="form-group">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" class="@error('name') is-invalid @enderror" placeholder="Nama Lengkap" name="nama_user" value="{{ old('nama_user') }}" required autocomplete="nama_user" autofocus /> 
                            </div>
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <i class="fas fa-envelope"></i>
                                <input type="email" class="@error('email') is-invalid @enderror" placeholder="Alamat Email" name="email" value="{{ old('email') }}" required autocomplete="email" />
                            </div>
                            @error('email')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <i class="fas fa-phone"></i>
                                <input type="number" class="@error('no_hp') is-invalid @enderror" placeholder="No. Handphone"  name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp"/>
                                
                                @error('no_hp')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <i class="fas fa-venus-mars"></i>
                                <select name="gender" id="gender" class="">
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>
                            </div>
                                @error('gender')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" class="@error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                            <span class="text-danger pb-3" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <p>Daftar sebagai</p>
                            <div class="input-field">
                                <i class="fas fa-tasks"></i>
                                <select name="role" id="role" class="">
                                    <option value="penyewa">penyewa</option>
                                    <option value="penyedia">penyedia</option>
                                </select>
                            </div>
                                @error('role')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                        <input type="submit" class="sl-btn" value="Daftar" />
                    </form>
            </div>
        </div>
        
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum punya akun?</h3>
                    <p>
                        Ayo Segera Mendaftar untuk Nikmati Akses TobaStay!
                    </p>
                    <button class="sl-btn transparent" id="sign-up-btn">Daftar</button>
                </div>
                {{-- <a href="{{ '/' }}"><img src="{{ asset('img/html/logo-login.png')}}" class="image" alt="" /></a> --}}
            </div>
            <div class="panel right-panel">
                <div class="content">
                <h3>Sudah punya akun?</h3>
                <p>
                    Silahkan login untuk nikmati akses TobaStay!
                </p>
                <button class="sl-btn transparent" id="sign-in-btn">Login</button>
                </div>
                {{-- <a href="{{ '/' }}"><img src="{{ asset('img/html/logo-login.png')}}" class="image" alt="" /></a> --}}
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('bootstrap/js/login.js') }}"></script>
<script
    src="https://kit.fontawesome.com/64d58efce2.js"
    crossorigin="anonymous"
></script>
@endsection 