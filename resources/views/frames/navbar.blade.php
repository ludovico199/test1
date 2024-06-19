<section class="navbar_desktop">
    <nav class="nav_list">
        <div class="nav_left">
            <nav>
                <a href="views/chisiamo.blade.php">CHI SIAMO</a>
                <a href="#events">EVENTI</a>
            </nav>
        </div>
        <div class="nav_icon"><a href="/"><img src="{{ asset('images/sughero_icona.png')}}" width="90px" height="90px"></a></div>
        <div class="nav_right">
            <nav>
                <a href="/wines">STORE</a>
                <a href="views/contatti.blade.php">CONTATTI</a>
            </nav>
        </div>
        <div class="nav_login">
            <nav class="username">
                <a href="/database" style="font-size: 20px;font-weight: bold;">{{ Auth::user()?->name }}</a>
            </nav>
            <nav class="profile-store_icon">
                <div class="nav_profile"><img src="{{ asset('images/sughero_login_icon.png')}}" height="40px" width="40px">
                    <div class="dropdown-content">
                        @guest
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        @else
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        @endguest
                    </div>
                </div>
                <a href=""><img src="{{ asset('images/sughero_carrel.png') }}" height="40px"></a>
            </nav>
        </div>
    </ul>
</section>
<section class="navbar_mobile">
    <button class="button_drop" onclick="myFunction()">MENU</button>
    <div class="nav_icon"><a href="/"><img src="images/sughero_icona.png" width="90px" height="90px"></a></div>
    <div class="dropdown-content_mobile" id="menu_drop">
        <a href="views/chisiamo.blade.php">CHI SIAMO</a>
        <a href="#events">EVENTI</a>
        <a href="/wines">STORE</a>
        <a href="views/contatti.blade.php">CONTATTI</a>
    </div>
    <script>
        function myFunction() {
          document.getElementById("menu_drop").classList.toggle("show");
        }
        window.onclick = function(e) {
          if (!e.target.matches('.button_drop')) {
          var myDropdown = document.getElementById("menu_drop");
            if (myDropdown.classList.contains('show')) {
              myDropdown.classList.remove('show');
            }
          }
        }
        </script>
</section>
