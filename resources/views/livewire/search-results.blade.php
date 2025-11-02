
<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 p-4 absolute border rounded-md bg-gray-700 border-indigo-600">
        @if (count($pupils) == 0)
        <p>Nobody here!</No-one>
        @endif
    
    
        @foreach($pupils as $pupil)
        <div class="pt-2" wire:key="{{$pupil->id}}">
            <a wire:navigate href="/pupils/{{$pupil->id}}">
                {{ $pupil->name_first}}
                {{ $pupil->name_last}}
                ({{ $pupil->reg }})
            </a>
        </div>
        @endforeach
    </div>
</div>