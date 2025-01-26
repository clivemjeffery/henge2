<x-layout>
    
    <div>
    <div class="py-20 flex flex-wrap justify-center gap-16">
        <div class="rounded bg-sky-50 dark:bg-blue-900 border border-transparent hover:border-blue-300">
            <div class="p-4 mx-4 my-2">
                <div class="text-3xl font-bold">Children</div>
                <div class="my-2 text-xl">Use your Purple Mash account</div>
                <button class="py-2 px-6 text-white bg-purple-900 dark:bg-purple-900">Log in with Purple Mash</button>
            </div>
        </div>
        <div class="rounded bg-sky-50 dark:bg-blue-900 border border-transparent hover:border-blue-300">
            <div class="p-4 mx-4 my-2">
                <div class="text-3xl">Adults</div>
                <div class="my-2 text-xl">Use your school Microsoft account</div>
                <a class="py-2 px-6 text-white bg-blue-500 dark:bg-blue-500"
                    href="{{ route('msconnect') }}">
                    Log in with Microsoft
                </a>
            </div>
        </div>

    </div>
</div>
</x-layout>