<dialog id="create-user-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe gebruiker</h2>

            <button type="button" id="close-create-user" class="modal-close">&times;</button>
        </div>

        <form method="POST" action="{{ route('users.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Naam</label>
                <input type="text" id="name" name="name" class="form-input" value="{{ old('name') }}" required>
                @error('name')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required>
                @error('email')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Wachtwoord</label>
                <input type="password" id="password" name="password" class="form-input" required>
                @error('password')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="role_id" class="form-label">Rol</label>
                <select id="role_id" name="role_id" class="form-input">
                    <option value="">Geen rol</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-user" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
