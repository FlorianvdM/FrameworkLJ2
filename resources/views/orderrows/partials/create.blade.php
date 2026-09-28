<dialog id="create-orderrow-modal" class="modal">

    <div class="modal-content">

        <div class="modal-header">
            <h2>Nieuwe orderregel</h2>

            <button type="button" id="close-create-orderrow" class="modal-close">&times;</button>
        </div>

        <form method="POST" action="{{ route('orderrows.create') }}" class="form">
            @csrf

            <div class="form-group">
                <label for="order_id" class="form-label">Order</label>
                <select id="order_id" name="order_id" class="form-input" required>
                    <option value="">Kies een order</option>
                    @foreach ($orders as $order)
                        <option value="{{ $order->id }}" {{ old('order_id') == $order->id ? 'selected' : '' }}>Order #{{ $order->id }}</option>
                    @endforeach
                </select>
                @error('order_id')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

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

            <div class="form-actions">
                <button type="button" id="cancel-create-orderrow" class="btn btn-secondary">Annuleren</button>
                <button type="submit" class="btn">Opslaan</button>
            </div>
        </form>
    </div>

</dialog>
