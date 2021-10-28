<!-- component -->
<div class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
    <div class="">
        <div class="p-5 text-white text-center text-3xl bg-gray-900">
            Pinguim do Laravel | <span class="text-yellow-500">Calcu</span>lator
        </div>
        <div class="pt-16 p-5 pb-0 text-white text-right text-3xl bg-gray-800">2000 + 100</div>
        <div class="p-5 text-white text-right text-3xl bg-gray-800">= <span class="text-yellow-500">2100</span></div>

        <div class="py-5">
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button>%</x-calculator.button>
                <x-calculator.button>(</x-calculator.button>
                <x-calculator.button>)</x-calculator.button>
                <x-calculator.button>÷</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button>7</x-calculator.button>
                <x-calculator.button>8</x-calculator.button>
                <x-calculator.button>9</x-calculator.button>
                <x-calculator.button>×</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button>4</x-calculator.button>
                <x-calculator.button>5</x-calculator.button>
                <x-calculator.button>6</x-calculator.button>
                <x-calculator.button>-</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button>1</x-calculator.button>
                <x-calculator.button>2</x-calculator.button>
                <x-calculator.button>3</x-calculator.button>
                <x-calculator.button>+</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <div class="flex-1 h-20 w-20 px-2 py-2"></div>
                <x-calculator.button>0</x-calculator.button>
                <x-calculator.button>.</x-calculator.button>
                <x-calculator.button yellow> =</x-calculator.button>
            </div>
        </div>

    </div>
</div>
