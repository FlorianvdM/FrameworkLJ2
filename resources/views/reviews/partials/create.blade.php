<dialog id="create-review-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe review</h2>

            <button type="button" id="close-create-review" class="modal-close">&times;</button>
        </div>

        <form method="POST" action="{{ route('reviews.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="product_id" class="form-label">Product</label>
                <select id="product_id" name="product_id" class="form-input" required>
                    <option value="">Kies een product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" {{ old('product_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

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
                <label for="comment" class="form-label">Opmerking</label>
                <textarea id="comment" name="comment" class="form-input" rows="5" required>{{ old('comment') }}</textarea>
                @error('comment')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-review" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
