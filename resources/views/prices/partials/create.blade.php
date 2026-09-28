<dialog id="create-price-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe prijs</h2>

            <button type="button" id="close-create-price" class="modal-close">&times;</button>
        </div>

        <form method="POST" action="{{ route('prices.create') }}" class="form">
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
                <label for="price" class="form-label">Prijs</label>
                <input type="number" id="price" name="price" class="form-input" min="0" step="0.01" value="{{ old('price') }}" required>
                @error('price')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="effdate" class="form-label">Ingangsdatum</label>
                <input type="datetime-local" id="effdate" name="effdate" class="form-input" value="{{ old('effdate') }}" required>
                @error('effdate')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-price" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
