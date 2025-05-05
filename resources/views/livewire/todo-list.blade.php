<div style="max-width: 500px; margin: auto; padding: 20px;">
    <h2>Liste de Tâches</h2>

    <form wire:submit.prevent="addTodo">
        <input type="text" wire:model="title" placeholder="Nouvelle tâche" />
        <button type="submit">Ajouter</button>
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
        @endforeach
    </ul>
</div>
