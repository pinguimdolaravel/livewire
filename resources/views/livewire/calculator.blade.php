<div
    class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
    <div class="">
        <div class="p-5 text-white text-center text-3xl bg-gray-900">
            Pinguim do Laravel | <span class="text-yellow-500">Calcu</span>lator
        </div>
        <div class="pt-16 p-5 pb-0 text-white text-right text-3xl bg-gray-800">
            {{ $math }}
        </div>
        @error('math')
            <div class="text-red-500 text-2xl mt-2">{{ $message }}</div>
        @enderror
        <div class="p-5 text-white text-right text-3xl bg-gray-800">
            = <span class="text-yellow-500">
                {{ $result }}
            </span>
        </div>

        <div class="py-5">
            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button>%</x-calculator.button>
                <x-calculator.button wire:click="addMath('parl')">(</x-calculator.button>
                <x-calculator.button wire:click="addMath('parr')">)</x-calculator.button>
                <x-calculator.button wire:click="operation('div')">÷</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button wire:click="addMath(7)">7</x-calculator.button>
                <x-calculator.button wire:click="addMath(8)">8</x-calculator.button>
                <x-calculator.button wire:click="addMath(9)">9</x-calculator.button>
                <x-calculator.button wire:click="operation('*')">×</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button wire:click="addMath(4)">4</x-calculator.button>
                <x-calculator.button wire:click="addMath(5)">5</x-calculator.button>
                <x-calculator.button wire:click="addMath(6)">6</x-calculator.button>
                <x-calculator.button wire:click="operation('-')">-</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button wire:click="addMath(1)">1</x-calculator.button>
                <x-calculator.button wire:click="addMath(2)">2</x-calculator.button>
                <x-calculator.button wire:click="addMath(3)">3</x-calculator.button>
                <x-calculator.button wire:click="operation('+')">+</x-calculator.button>
            </div>

            <div class="flex items-stretch bg-gray-900 h-24">
                <x-calculator.button wire:click="addMath(0)">0</x-calculator.button>
                <x-calculator.button wire:click="addMath('.')">.</x-calculator.button>
                <x-calculator.button yellow wire:click="clearMath">C</x-calculator.button>
                <x-calculator.button yellow wire:click="operation('=')"> =</x-calculator.button>
            </div>
        </div>

    </div>
</div>
