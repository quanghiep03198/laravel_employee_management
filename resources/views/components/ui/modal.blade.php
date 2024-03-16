<div x-data="{ open: false }">
	<div @click="open = true">
		{{ $trigger }}
	</div>
	<div x-show="open" class="fixed inset-0 z-[100] overflow-y-auto"
		aria-labelledby="modal-title" role="dialog" aria-modal="true">
		<div
			class="flex min-h-screen items-center justify-center px-4 text-center sm:block sm:p-0 md:items-center">
			<div x-cloak @click="open = false" x-show="open"
				x-transition:enter="transition ease-out duration-300 transform"
				x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
				x-transition:leave="transition ease-in duration-200 transform"
				x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
				class="fixed inset-0 bg-gray-950/80 bg-opacity-40 transition-opacity"
				aria-hidden="true"></div>

			<div x-cloak x-show="open"
				x-transition:enter="transition ease-out duration-300 transform"
				x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave="transition ease-in duration-200 transform"
				x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
				x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
				class="2xl:max-w-2xl my-20 inline-block w-full max-w-xl transform overflow-hidden rounded-lg bg-white p-8 text-left shadow-xl transition-all">
				{{ $slot }}
			</div>
		</div>
	</div>
</div>
