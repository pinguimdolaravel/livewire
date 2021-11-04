<div
    class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
    <div class="">
        <div class="p-5 text-white text-center text-3xl bg-gray-900 ">
            Pinguim do Laravel | <span class="text-yellow-500">TooooDo</span> App
        </div>

        <livewire:todo.create />

        <div class="text-white text-2xl flex justify-between items-center">
            <label for="filter_all">
                <input type="radio" id="filter_all" name="filter" wire:model="filter" value="all" />
                <span>All</span>
            </label>
            <label for="filter_pending">
                <input type="radio" id="filter_pending" name="filter" wire:model="filter" value="pending" />
                <span>Pending</span>
            </label>
            <label for="filter_done">
                <input type="radio" id="filter_done" name="filter" wire:model="filter" value="done" />
                <span>Done</span>
            </label>
        </div>

        <div class="p-5 space-y-5">
            @foreach ($todos as $todo)
                <livewire:todo.item :todo="$todo" :key="$todo->id" />
            @endforeach
        </div>
    </div>
</div>
