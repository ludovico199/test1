@include('frames.header') <!-- Include l'header -->

    @include('frames.navbar') <!-- navbar desktop/mobile -->
    <main class="main_database">
        <section class="id_list" style="width: 35%;">
            <h1>Lista utenti</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Email verificata?</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->email_verified_at)
                                    {{ $user->email_verified_at }}
                                @else
                                    NO
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{ route('delete-user', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo utente?')">Elimina</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section class="wine_maker">
            <h2>Caricare un prodotto</h2>
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" class="form_wine">
                @csrf
                <input type="text" name="title" placeholder="NOME VINO" required class="label_wine">
                <input type="number" name="price" placeholder="Prezzo (€)" step="0.01" required class="label_wine">
                <input type="number" name="year" placeholder="Anno" required class="label_wine">
                <input type="text" name="Denom" placeholder="Denominazione" required class="label_wine">
                <input type="text" name="grapes" placeholder="Uve" required class="label_wine">
                <input type="number" name="Alcool" placeholder="Alcool (%)" step="0.01" required class="label_wine">
                <input type="number" name="Cl" placeholder="Formato (L)" step="0.01" required class="label_wine">
                <textarea name="description" placeholder="Descrizione" rows="4" required class="wine_textarea"></textarea>
                <textarea name="food" placeholder="Abbinamenti" rows="4" required class="wine_textarea"></textarea>
                <input type="file" name="image" required>
                <label for="type">Tipo di vino:</label>
                <select name="type" id="type" required>
                    <option value="rosso">Rosso</option>
                    <option value="bianco">Bianco</option>
                    <option value="spumante">Spumante</option>
                </select>
                <div class="button_send">
                    <button type="submit" class="button_wine">Carica Vino</button>
                </div>
            </form>
        </section>
    </main>
    @include('frames.footer') <!-- footer -->
</body>
</html>
