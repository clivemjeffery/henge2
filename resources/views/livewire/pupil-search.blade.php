<div>
    <form>
        <div class="mt-2">
            <input
                type="text"
                class="p-4 w-2/5 border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="searchText"
                placeholder="Search pupils by name"
            >
            <button class="rounded-md text-white font-medium p-4 bg-indigo-600 disabled:bg-indigo-400"
                wire:click.prevent="clear()"
                {{ empty($searchText) ? 'disabled' : '' }} >
                Clear
            </button>
            
            
        </div>
    </form>
    <div class="mt-4">
        @foreach($pupils as $pupil)
        <div class="pt-2">
            <a href="/pupils/{{$pupil->id}}">{{ $pupil->name_first}}</a>
            {{ $pupil->name_last}}
            ({{ $pupil->reg }})
        </div>
        @endforeach
    </div>
</div>

