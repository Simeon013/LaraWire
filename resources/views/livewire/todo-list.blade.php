<div style="max-width: 500px; margin: auto; padding: 20px;">
    <h2>Liste de Tâches</h2>

    <form wire:submit.prevent="addTodo">
        {{-- <input type="text" wire:model="title" placeholder="Nouvelle tâche" /> --}}
        {{-- <flux:field>
            <flux:label>Nouvelle tâche</flux:label>

            <flux:description>This will be publicly displayed.</flux:description>

            <flux:input type="text" wire:model="title" placeholder="Nouvelle tâche"/>

            <flux:error name="title" wire:model="title">This is a required field.</flux:error>
        </flux:field> --}}
        <flux:input type="text" wire:model="title" placeholder="Nouvelle tâche" />
        <flux:separator  class="mx-2" />
        <flux:button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Ajouter
        </flux:button>
        @error('title') <span style="color: red">{{ $message }}</span> @enderror
    </form>

    <ul style="margin-top: 20px;">
        @foreach ($todos as $todo)
            <li style="margin-bottom: 10px;">
                <input type="checkbox" wire:click="toggleCompleted({{ $todo->id }})" {{ $todo->completed ? 'checked' : '' }} />
                <span style="{{ $todo->completed ? 'text-decoration: line-through;' : '' }}">
                    {{ $todo->title }}
                </span>
                <button wire:click="deleteTodo({{ $todo->id }})" style="color: red;">🗑 Supprimer</button>
            </li>
            {{-- <flux:field variant="inline">
                <flux:checkbox wire:model="todo" />

                <flux:label>{{ $todo->title }}</flux:label>

                <flux:error name="terms" />
            </flux:field> --}}
        @endforeach
    </ul>

    <flux:select wire:model="industry" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>

    <flux:button icon="ellipsis-horizontal" />
    <flux:button icon="arrow-down-tray">Export</flux:button>
    <flux:button icon:trailing="chevron-down">Open</flux:button>
    <flux:button icon="x-mark" variant="subtle" />
</div>
