@include('frames.header') <!-- head -->
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<body>
    @include('frames.navbar') <!-- navbar desktop/mobile -->
    <main>
        <section class="body_login">
            <form action="{{ route('login.custom') }}" class="box" method="POST">
                @csrf
                <div class="email">
                    <input type="email" name="email" id="email" placeholder="EMAIL" class="label_text"/>
                </div>
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="PASSWORD" class="label_text"/>
                    @if ($errors->has('emailPassword'))
                        <span class="text-danger">{{ $errors->first('emailPassword') }}</span>
                    @endif
                </div>
                <div class="forgot_password">
                    @if (Route::has('password.request'))
                        <a class="forgot_password" href="">

                        </a>
                    @endif
                </div>
                <div class="remember">
                    <label for="remember" class="remewmber_me"></label>
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="remember_text" style="color: white">remember me</span>
                </div>
                <button class="button_login">login</button>
            </form>
        </section>
    </main>
    @include('frames.footer') <!-- footer -->
</body>
