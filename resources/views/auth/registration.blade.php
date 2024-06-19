@include('frames.header') <!-- head -->
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<body>
    @include('frames.navbar') <!-- navbar desktop/mobile -->
    <main>
        <form action="{{ route('register.custom') }}" class="box" method="POST">
            @csrf
            <div class="email">
                <input type="email" name="email" id="email" placeholder="EMAIL" class="label_text"/>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="name">
                <input type="text" name="name" id="name" placeholder="NOME" class="label_text"/>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="password">
                <input type="password" name="password" id="password" placeholder="PASSWORD" class="label_text"/>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            </div>
            <div class="remember">
                <label for="remember" class="remember_me"></label>
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            </div>
            <button type="submit" class="button_login">Registrati</button>
        </form>
    </main>
    @include('frames.footer') <!-- footer -->
</body>
