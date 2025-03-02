<x-layout>
    <main>

    <div class="mt-4">
        @foreach($pupils as $pupil)
        <div class="pt-2">
            <a href="/pupils/{{$pupil->id}}">{{ $pupil->name_first}}</a>
            {{ $pupil->name_last}}
            ({{ $pupil->reg }})
        </div>
        @endforeach
    </div>

    </main>
</x-layout>
