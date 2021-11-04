<div
    class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
    <div class="">
        <div class="p-5 text-white text-center text-3xl bg-gray-900 ">
            Pinguim do Laravel | <span class="text-yellow-500">TooooDo</span> App
        </div>

        <livewire:todo.create />

        <div class="p-5 space-y-5">
            @foreach ($todos as $todo)
				<livewire:todo.item :todo="$todo" :key="$todo->id" />
            @endforeach
        </div>
    </div>
</div>
