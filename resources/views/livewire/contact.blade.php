<div>
    <form wire:submit.prevent="save">

        <div class="controls">

            <div class="form-group">
                <input wire:model="message.name" type="text" placeholder="Nombres" required="required">
                @error('message.name') <span class="error ml-1 text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <input wire:model="message.email" type="email" placeholder="Email" required="required">
                @error('message.email') <span class="error ml-1 text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <input wire:model="message.phone" type="phone" placeholder="Teléfono" required="required">
                @error('message.phone') <span class="error ml-1 text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <textarea wire:model="message.message" placeholder="Mensaje" rows="4" required="required"></textarea>
                @error('message.message') <span class="error ml-1 text-danger">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn-curve btn-color"><span>Enviar Mensaje</span></button>
        </div>
    </form>
</div>
