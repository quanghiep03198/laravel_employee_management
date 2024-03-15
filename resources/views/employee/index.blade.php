@php

@endphp

<x-app-layout>
	<div class="flex justify-between">
		{{-- Table title --}}
		<div class="prose mb-6 prose-h3:mb-0.5">
			<h3>Employees</h3>
			<small class="text-muted">The table shows information of
				employees</small>
		</div>
		{{-- Table actions --}}
		<div class="flex items-stretch justify-end gap-1">
			<a href="{{ route('view.employee.add') }}">
				<x-ui.button :variant="'outline'" :shape="'square'" class="easyui-tooltip" title="Add an employee" :icon="'plus-lg'" />
			</a>
			<x-ui.button :variant="'outline'" :shape="'square'" class="easyui-tooltip" title="Export to file" :icon="'file-earmark-arrow-down'" />
		</div>

	</div>
	{{-- Data table --}}
	<table id="dg" class="!font-sans !font-normal [&>*]:!bg-background [&>*]:!font-sans"></table>
	<script type="module">
		console.log('data:>>>', @json($data))
		const datagrid = $('#dg').datagrid({
			data: @json($data),
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
						colspan: 6,
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
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
						halign: 'center',
						hstyler: function() {
							return {
								class: '!font-semibold',
							}
						}
					},

				],
			],
			toolbar: '#toolbar',
			minHeight: 160,
			checkbox: true,
			showHeader: true,
			showFooter: true,
			pagination: true,
			rownumbers: true,
			resizeHandle: 'both',
			striped: true,
			nowrap: true,
			emptyMsg: 'No data to display'
		})
	</script>
</x-app-layout>
