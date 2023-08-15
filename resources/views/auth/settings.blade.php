<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="../css/Homepage.css"> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Accueil</title>
</head>
<body>
    <div class="bg_ball_style ball1"></div>
    <div class="bg_ball_style ball2"></div>
    <!-- <div class="bg_ball_style ball3"></div>
    <div class="bg_ball_style ball4"></div> -->

    <nav>
        <div class="logo">
            <span>D</span>
            <span>S</span>
            <span>I</span>
        </div>
        <div class="nav_menu">
            <ul>
                <li class="nav_links"><a href="#">Accueil</a></li>
                <li class="nav_links"><a href="#">Documents</a></li>
                <li class="nav_links"><a href="#">Dossiers</a></li>
                <li class="nav_links"><a href="#">Archive</a></li>
                <li class="nav_links">
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            Logout
                    </a>
                </li>

                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none">
                    @csrf
                </form>
                <li class="nav_links"><a href="#"><ion-icon name="settings-outline"></ion-icon></a></li>
            </ul>
        </div>

        <div class="menuHamburger">
            <ion-icon name="menu"></ion-icon>
        </div>
    </nav>

    <div class="connexion-message">

        @if (! auth()->user()->two_factor_secret)
            <div class="twofa-message error">
                <h3>
                    Vous n'avez pas activé la double authentification
                </h3>
                <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                    @csrf
                    <button type="submit"
                            style="background: #31dc01;
                                    color: #fff;
                                    border: none;
                                    border-radius: 8px;
                                    padding: 10px 20px;
                                    cursor: pointer;
                                    font-weight: bold;">
                        Enable
                    </button>
                </form>
            </div>
        @else
            <div class="twofa-message success">
                <h3>
                    Vous avez activé la double authentification
                </h3>
                <form action="{{ url('user/two-factor-authentication') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            style="background: #ff0000;
                                    color: #fff;
                                    border: none;
                                    border-radius: 8px;
                                    padding: 10px 20px;
                                    cursor: pointer;
                                    font-weight: bold;">
                        Disable
                    </button>
                </form>
            </div>
        @endif

        @if (session('status') == 'two-factor-authentication-enabled')
            <div class="recovery-container">
                <div class="QrContainer">
                    <div class="QrMessage">
                        <h3>Scanner le code Qr pour terminer la configuration de la double authentification</h3>
                    </div>

                    <div class="Qrcode">
                        {{!! auth()->user()->twoFactorQrCodeSvg() !!}}
                    </div>
                </div>
                <form action="{{ url('user/confirmed-two-factor-authentication') }}" method="POST">
                    <h3>Entrer ici le code de vérification obtenue à partir de Code Qr</h3>
                    @csrf
                    <input type="text" name="code" class="input">
                    <button type="submit">Confirmer</button>
                </form>
            </div>
        @endif

        @if (session('status') == 'two-factor-authentication-confirmed')
            <div class="twofa-message success">
                Two factor authentication confirmed and enabled successfully.
            </div>

            <div class="recuperation">
                <p>Conserver ces codes de récupérations au cas où.</p> <br>
                <ul>
                    {{-- {{ (array) $request->user()->recoveryCodes() }} --}}
                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                        <li> - {{ trim($code) }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
