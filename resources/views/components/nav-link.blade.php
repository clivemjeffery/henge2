@props(['active' => false])
<a
    {{ $attributes }}
    class="block {{ $active ? '' : 'text-gray-300 hover:bg-henge-darker hover:text-white' }} px-3 py-2 text-sm font-medium rounded-md bg-henge"
    aria-current="page">
    {{ $slot }}
</a>
