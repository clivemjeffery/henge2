<div class="p-2 m-2">
    <h2 class="text-2xl text-white">
        {{$pupil->name_first}}
        {{$pupil->name_last}}
    </h2>
    <div>
        <div>Full name: {{ $pupil->name_first }} {{ $pupil->names_middle }} {{ $pupil->name_last }}</div>
        <div>Date of birth: {{ $pupil->dob }}</div>
        <div>Admission number: {{ $pupil->adno }}</div>
        <div>UPN: {{ $pupil->upn }}</div>
    </div>
</div>
