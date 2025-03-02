
<div class="{{ $show ? 'block' : 'hidden' }}">
    <div class="mt-4 p-4 absolute border rounded-md bg-gray-700 border-indigo-600">
        @if (count($pupils) == 0)
        <p>Nobody here!</No-one>
        @endif
    
    
        @foreach($pupils as $pupil)
        <div class="pt-2">
            <a href="/pupils/{{$pupil->id}}">{{ $pupil->name_first}}</a>
            {{ $pupil->name_last}}
            ({{ $pupil->reg }})
        </div>
        @endforeach
    </div>
</div>