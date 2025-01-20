@props(['active' => false])
<a
    {{ $attributes }}
    class="block {{ $active ? '' : 'text-gray-300 hover:bg-sky-600 hover:text-white' }} px-3 py-2 text-sm font-medium rounded-md bg-sky-500"
    aria-current="page">
    {{ $slot }}
</a>
