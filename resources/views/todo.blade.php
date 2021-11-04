<x-app-layout>
    <div
        class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
        <div class="">
            <div class="p-5 text-white text-center text-3xl bg-gray-900 ">
                Pinguim do Laravel | <span class="text-yellow-500">TooooDo</span> App
            </div>

            <input class="p-8 text-white text-3xl bg-gray-800 w-full focus:outline-none focus:border-0" />

            <div class="p-5 space-y-5">

                <x-todo.item :checked="false">
                    Task 1
                </x-todo.item>

                <x-todo.item :checked="true">
                    Task 2
                </x-todo.item>

            </div>
        </div>
    </div>
</x-app-layout>
