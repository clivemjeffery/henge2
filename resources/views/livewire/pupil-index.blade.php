
<div class="p-2 m-2">

    <a
        href="/pupils/create"
        class="px-1 text-gray-200 bg-green-700 hover:bg-green-900 rounded-sm"
        wire:navigate
    >Add Pupil</a>

    @foreach($pupils as $pupil)
    <div class="pt-2" wire:key="{{$pupil->id}}">
        <a wire:navigate href="/pupils/{{$pupil->id}}">
            {{ $pupil->name_first}}
            {{ $pupil->name_last}}
            ({{ $pupil->reg }})
        </a>

        <button class="px-1 text-gray-200 bg-red-700 hover:bg-red-900 rounded-sm"
            wire:click="delete({{$pupil->id}})"
            wire:confirm="Delete {{$pupil->name_first}}! Are you sure?">
            Delete
        </button>
    </div>
    @endforeach
</div>