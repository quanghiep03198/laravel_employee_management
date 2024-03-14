@php
    $data = [];

@endphp

<x-app-layout>
    <div class="flex justify-between">

        <div class="prose mb-6 prose-h3:mb-0.5">
            <h3>Employees</h3>
            <small class="text-muted">The table shows information of employees</small>
        </div>
        <div class="grid grid-flow-col gap-1">
            <a href="{{ route('employee.add.view') }}">
                <x-ui.primary-button :variant="'outline'" :shape="'square'" class="easyui-tooltip" title="Add an employee">
                    <i class="bi bi-plus-lg"></i>
                </x-ui.primary-button>
            </a>
            <x-ui.primary-button :variant="'outline'" :shape="'square'" class="easyui-tooltip" title="Export to file">
                <i class="bi bi-file-earmark-arrow-down"></i>
            </x-ui.primary-button>
        </div>
    </div>
    <table id="dg" class="!font-sans !font-normal [&>*]:!font-sans [&>*]:!bg-background">

    </table>

    <script type="module">
        const datagrid = $('#dg').datagrid({
            data: @json($data),
            columns: [
                // Master columns

                [{
                    title: 'Summary',
                    halign: 'center',
                    resizable: true,
                    colspan: 4,
                    hstyler: function() {
                        return {
                            class: '!font-extrabold',
                        }
                    }
                }, {
                    title: 'Address',
                    halign: 'center',
                    resizable: true,
                    colspan: 3,
                    hstyler: function() {
                        return {
                            class: '!font-extrabold',
                        }
                    }
                }],
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
                                class: '!font-bold',
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
                                class: '!font-bold',
                            }
                        }

                    },
                    {
                        field: 'email',
                        title: 'Email',
                        sortable: true,
                        resizable: true,
                        width: 128,
                        halign: 'center',
                        hstyler: function() {
                            return {
                                class: '!font-bold',
                            }
                        }

                    },
                    {
                        field: 'phone',
                        title: 'Phone number',
                        sortable: true,
                        resizable: true,
                        width: 128,
                        halign: 'center',
                        hstyler: function() {
                            return {
                                class: '!font-bold',
                            }
                        }

                    },
                    {
                        field: 'street',
                        title: 'Street',
                        resizable: true,
                        sortable: true,
                        width: 128,
                        halign: 'center',
                        hstyler: function() {
                            return {
                                class: '!font-bold',
                            }
                        }

                    },
                    {
                        field: 'district',
                        title: 'Street',
                        resizable: true,
                        sortable: true,
                        width: 128,
                        halign: 'center',
                        hstyler: function() {
                            return {
                                class: '!font-bold',
                            }
                        }

                    },
                    {
                        field: 'province',
                        title: 'Province/City',
                        resizable: true,
                        sortable: true,
                        width: 128,
                        halign: 'center',
                        hstyler: function() {
                            return {
                                class: '!font-bold',
                            }
                        }
                    },
                ],
            ],
            minHeight: 160,
            fitColumns: true,
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
