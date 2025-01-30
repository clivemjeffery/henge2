<x-layout>
    <main>
        
        @foreach ($pupils as $pupil)
        <div>
            {{ $pupil->name_first}}
            {{ $pupil->name_last}}
            {{ empty($pupil->dob) ? '' : $pupil->dob->format('d.m.y') }}
            {{ $pupil->created_at }}
        </div>
        @endforeach

    </main>
</x-layout>
