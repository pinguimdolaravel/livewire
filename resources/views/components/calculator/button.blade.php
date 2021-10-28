@props([
	'yellow' => null
])

<div class="flex-1 px-2 py-2 justify-center flex items-center text-white text-2xl font-semibold cursor-pointer">
    <div
		{{ $attributes->class([
			'rounded-full h-20 w-20 flex items-center
			justify-center shadow-lg border-2 border-purple-700
			hover:border-2 hover:border-gray-500 focus:outline-none',
			'bg-gray-800' => !$yellow,
			'bg-yellow-500' => $yellow
		])  }}>
        {{ $slot }}
    </div>
</div>
