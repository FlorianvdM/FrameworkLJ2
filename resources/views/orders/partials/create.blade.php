<dialog id="create-order-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe order</h2>

            <button type="button" id="close-create-order" class="modal-close">&times;</button>
        </div>

        <form method="POST" action="{{ route('orders.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="user_id" class="form-label">Gebruiker</label>
                <select id="user_id" name="user_id" class="form-input" required>
                    <option value="">Kies een gebruiker</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="order_date" class="form-label">Orderdatum</label>
                <input type="datetime-local" id="order_date" name="order_date" class="form-input" value="{{ old('order_date') }}" required>
                @error('order_date')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Status</label>
                <input type="number" id="status" name="status" class="form-input" min="0" max="255" value="{{ old('status', 0) }}" required>
                @error('status')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-order" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
