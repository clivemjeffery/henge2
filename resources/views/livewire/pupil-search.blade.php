<div>
    <div >
        <form>
            <div class="mt-2">
                <input
                    type="text"
                    class="p-2 w-full border rounded-md bg-gray-700 text-white"
                    wire:model.live.debounce="searchText"
                    placeholder="{{ $placeholder }}"
                >
                
            </div>
        </form>
    </div>
    <div >
        <livewire:search-results :pupils="$pupils" :show="!empty($searchText)">
    </div>
</div>

