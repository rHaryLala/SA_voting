@if($modalOpen)
    <div class="fixed inset-0 flex items-center justify-center z-50 bg-black bg-opacity-50"
         style="display: {{ $modalOpen ? 'flex' : 'none' }};">
        <div class="bg-white p-6 rounded shadow-lg">
            <h2 class="text-xl font-semibold mb-4">Ajouter un candidat</h2>

            @if (session()->has('message'))
                <div class="mb-4 text-green-500">
                    {{ session('message') }}
                </div>
            @endif

            <form wire:submit.prevent="insertCandidate">
                <div class="mb-4">
                    <label for="matricule" class="block text-sm font-medium text-gray-700">Matricule</label>
                    <input type="text" id="matricule" wire:model="matricule" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    @error('matricule') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" id="name" wire:model="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nom de Famille</label>
                    <input type="text" id="last_name" wire:model="last_name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="mention" class="block text-sm font-medium text-gray-700">Mention</label>
                    <input type="text" id="mention" wire:model="mention" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required>
                    @error('mention') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Image (facultatif)</label>
                    <input type="text" id="image" wire:model="image" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Ajouter</button>
            </form>

            <button class="mt-4 text-red-500" wire:click="$emit('closeModal')">Fermer</button>
        </div>
    </div>
@endif

