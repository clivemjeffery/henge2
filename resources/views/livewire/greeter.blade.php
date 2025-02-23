<div>
    <form
        wire:submit="changeGreeting()"
    >
        <div class="mt-2">
            <select
                type="text"
                class="p-4 h-8 border rounded-md bg-gray-700 text-white"
                wire:model.fill="greeting"
            >
                @foreach($greetings as $g)
                <option value"{{$g->greeting}}">{{$g->greeting}}</option>    
                @endforeach
            </select>
            <input
                id="newName"
                type="text"
                class="p-4 h-3 border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="name"
            >
        </div>
        <div>
            @error('name')
            {{$message}}
            @enderror
        </div>
        <div class="mt-2">
            <button
                type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-purple-600"
            >
                Greet!
            </button>
        </div>
    </form>

    @if ($greetingMessage != '')
    <div class="mt-5">
        {{$greetingMessage}}
    </div>
    @endif
</div>
