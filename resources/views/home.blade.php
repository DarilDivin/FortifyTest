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

    {{-- <div class="connexion-message"> --}}

        {{-- @if (! auth()->user()->two_factor_secret)
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
        @endif --}}

        {{-- @if (session('status') == 'two-factor-authentication-enabled')
            <div class="recovery-container">
                <p>Scanner le code Qr pour terminer la configuration de la double authentification</p>

                <div class="Qrcode">
                    {{!! auth()->user()->twoFactorQrCodeSvg() !!}}
                </div>

                <form action="{{ url('user/confirmed-two-factor-authentication') }}" method="POST">
                    @csrf
                    <input type="text" name="code">
                    <button type="submit">Confirmer</button>
                </form>
            </div>
        @endif

        @if (session('status') == 'two-factor-authentication-confirmed')
            <div class="mb-4 font-medium text-sm">
                Two factor authentication confirmed and enabled successfully.
            </div>

            <p>Conserver ces codes de récupérations au cas où.</p> <br>
            <ul> --}}
                {{-- {{ (array) $request->user()->recoveryCodes() }} --}}
                {{-- @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes, true)) as $code)
                    <li>{{ trim($code) }}</li>
                @endforeach
            </ul>
        @endif
    </div> --}}








    <section class="search-zone">
        <form action="" method="post" class="search-form">
            <input type="search"  class="search-bar" placeholder="Rechercher..." minlength="1">
            <ion-icon name="search"></ion-icon>
        </form>
    </section>

    <section class="infos-zone">
        <div class="info-container">
            <h3 class="info-title">This is the information title</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit ipsum laudantium vero delectus iure corrupti itaque aperiam quibusdam. Numquam molestiae aut magnam facere nesciunt, quod a dicta nostrum dolorem facilis vero possimus provident tempore sint assumenda laborum? At illo quod libero officia fugit quisquam, deleniti expedita adipisci eligendi cum! Eaque. <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iste in expedita consequuntur sed voluptate qui doloremque placeat quae animi necessitatibus adipisci facere quas. Expedita incidunt at aperiam culpa vitae tenetur. Nam, voluptates nobis similique necessitatibus aperiam, sit fugit adipisci illo, eum porro beatae animi? Aut ratione quod eos nostrum.
            </p>
        </div>
    </section>

    <section class="recent">
        <div class="recent-title">
            <h3> Quick Access </h3>
        </div>
        <div class="recent-container">
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="folder"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>
            <div class="recent-element">
               <a href="#"><ion-icon name="document-text-outline"></ion-icon></a>
               <p>Nom du document</p>
            </div>

        </div>
    </section>

    {{-- <section class="add-document">
        <div class="add-title">
            <h3>Ajouter un document </h3>
        </div>
        <div class="add-form">
            <form action="" method="post">
                <input type="text" name="" id="" placeholder="Code">
                <input type="text" name="" id="" placeholder="Libellé">
                <textarea name="" id="" cols="480" rows="5" placeholder="Add a description"></textarea>

                <div class="form__control">
                    <label for="avatar">User Avatar</label>
                    <input type="file" id="avatar" />
                </div>

                <button type="submit">Ajouter</button>
            </form>
        </div>
    </section> --}}

    <footer>
        <hr>
        <div class="footer-content">
            <h2> DSI </h2>
            <ul>
                <li class="nav_links"><a href="#">Accueil</a></li>
                <li class="nav_links"><a href="#">Documents</a></li>
                <li class="nav_links"><a href="#">Dossiers</a></li>
                <li class="nav_links"><a href="#">Rechercher</a></li>
            </ul>

            <div class="socials">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-google"></ion-icon>
                <ion-icon name="logo-twitter"></ion-icon>
                <ion-icon name="logo-linkedin"></ion-icon>
            </div>

            <div class="copyright">
                © 2023 DSI. All right reserved
            </div>
        </div>
    </footer>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- <script src="../js/script.js"></script> -->
    <script>

    const menuHamburgerbtn = document.querySelector('.menuHamburger')
    const menuHamburger = document.querySelector('.nav_menu')
    const searchZone = document.querySelector('.search-zone')
    const connexionMessage = document.querySelector('.connexion-message')

        menuHamburgerbtn.addEventListener('click', () => {
        menuHamburger.classList.toggle('displayMenu');
        connexionMessage.classList.toggle('marge')
        })
    </script>
</body>
</html>
