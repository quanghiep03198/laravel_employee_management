<x-app-layout>

	<div class="flex justify-between">
		{{-- Table title --}}
		<div class="prose mb-6 prose-h3:mb-0.5">
			<h3>Employees</h3>
			<small class="text-muted">The table shows information of employees</small>
		</div>
		{{-- Table actions --}}
		<div class="flex items-center justify-end gap-1">
			<x-ui.modal wire:model="show">
				<x-slot name="trigger">
					<x-ui.button :variant="'destructive'" :shape="'square'" :icon="'trash'"
						id="delete-btn" class="hidden" />
				</x-slot>
				<div class="relative">
					<div class="gap-6 xl:flex xl:items-start">
						<div
							class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-500/10 sm:mx-0 sm:h-10 sm:w-10">
							<i class="bi bi-exclamation-triangle text-xl text-destructive"></i>
						</div>
						<div class="sm:ml-4 sm:mt-0 sm:text-left">
							<h3 class="text-base font-semibold leading-6 text-gray-900"
								id="modal-title">
								Remove this employee</h3>
							<div class="mt-2">
								<p class="text-sm text-gray-500">
									Are you sure you want to remove these
									employees? All of your data will be permanently removed from our
									servers forever. This action cannot be undone.
								</p>
							</div>
						</div>
					</div>
					<div class="mt-5 flex flex-row-reverse gap-x-1 sm:mt-4">
						<x-ui.button :variant="'destructive'"
							x-on:click="deleteEmployee">Delete</x-ui.button>
						<x-ui.button :variant="'outline'"
							x-on:click="open=false">Cancel</x-ui.button>
					</div>
				</div>
			</x-ui.modal>
			<a href="{{ route('view.employee.add') }}">
				<x-ui.button :variant="'outline'" :shape="'square'" :icon="'plus-lg'" />
			</a>
			<x-ui.button :variant="'outline'" :shape="'square'" :icon="'file-earmark-arrow-down'" />
		</div>
	</div>


	{{-- Data table --}}


	<table id="datagrid"></table>
	<script type="module">
		const selectedRows = []

		const datagrid = $('#datagrid').datagrid({
			url: '{{ route('api.employee.list') }}',
			method: 'GET',
			columns: [
				// Master columns
				[{
						title: 'Personal information',
						halign: 'center',
						resizable: true,
						colspan: 8,
						hstyler: function() {
							return {
								class: '!font-extrabold',
							}
						}
					},
					{
						title: 'Business information',
						halign: 'center',
						resizable: true,
						colspan: 4,
						hstyler: function() {
							return {
								class: '!font-extrabold',
							}
						}
					},
				],
				// Sub-columns
				[{
						field: 'first_name',
						title: 'First name',
						sortable: true,
						resizable: true,
						minWidth: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'last_name',
						title: 'Last name',
						sortable: true,
						resizable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'gender',
						title: 'Gender',
						sortable: true,
						resizable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'personal_email',
						title: 'Personal email',
						sortable: true,
						resizable: true,
						width: 240,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'phone_number',
						title: 'Phone number',
						sortable: true,
						resizable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'address',
						title: 'Detailed address',
						resizable: true,
						sortable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'address_district',
						title: 'District',
						resizable: true,
						sortable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'address_province',
						title: 'Province/City',
						resizable: true,
						sortable: true,
						width: 128,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'business_email',
						title: 'Business email',
						sortable: true,
						resizable: true,
						width: 240,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'department_id',
						title: 'Department',
						sortable: true,
						resizable: true,
						width: 240,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'position_id',
						title: 'Position',
						sortable: true,
						resizable: true,
						width: 240,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},
					{
						field: 'hire_date',
						title: 'Hired date',
						sortable: true,
						resizable: true,
						width: 240,
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					}
				],
			],
			idField: 'id',
			minHeight: 160,
			showHeader: true,
			showFooter: true,
			selectOnCheck: true,
			pagination: true,
			rownumbers: true,
			resizeHandle: 'both',
			nowrap: true,
			emptyMsg: 'No data to display',
			loadMsg: 'Loading data ...',
			onSelect: (index, row) => {
				selectedRows.push(row)
				console.log($('#delete-btn'));
				$('#delete-btn').removeClass('hidden')
			},
			onUnselect: (index, row) => {
				selectedRows.splice(selectedRows.findIndex(
					item => item.id === row.id), 1)
				if (selectedRows.length === 0) {
					$('#delete-btn').addClass('hidden')
				}
			},

		})

		$('.datagrid-body').addClass(
			'scrollbar-thin scrollbar-track-transparent scrollbar-thumb-border')
		$('.datagrid-wrap').addClass('rounded-lg')
	</script>
</x-app-layout>
