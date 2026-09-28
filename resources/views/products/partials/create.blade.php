<dialog id="create-product-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuw product</h2>

            <button
                type="button"
                id="close-create-product"
                class="modal-close"
            >
                &times;
            </button>
        </div>

        <form
            method="POST"
            action="{{ route('products.create') }}"
            class="form"
        >
            @csrf

            <div class="form-group">
                <label
                    for="name"
                    class="form-label"
                >
                    Naam
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-input"
                    value="{{ old('name') }}"
                    required
                    autofocus
                >

                @error('name')
                    <span class="form-error">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Beschrijving</label>
                <textarea id="description" name="description" class="form-input" rows="5" required>{{ old('description') }}</textarea>
                @error('description')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="category_id" class="form-label">Categorie</label>
                <select id="category_id" name="category_id" class="form-input" required>
                    <option value="">Kies een categorie</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="button" id="cancel-create-product" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
