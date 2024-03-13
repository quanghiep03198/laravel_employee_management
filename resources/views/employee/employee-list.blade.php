@php
    $data = [
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john_doe@email.com',
            'phone' => '0123456678',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
        [
            'phone' => '0123123123',
            'first_name' => 'Jane',
            'last_name' => 'Hello',
            'email' => 'jane@email.com',
            'address' => [
                'street' => 'Tran Nguyen Han',
            ],
        ],
    ];

@endphp
<x-app-layout>
    <style>
        .lines-no .datagrid-body td {
            border-right: 1px dotted transparent;
            border-bottom: 1px dotted transparent;
        }
    </style>
    <table id="dg" pagination="true" rownumbers="true" pageSize="10" fitColumns="true">
        <thead>
            <tr>
                <th rowspan="2" field='id' checkbox="true" width="80"></th>
                <th rowspan="2" field='first_name' sortable="true" width="180"> Name</th>
                <th rowspan="2" field='email' sortable="true" width="240">Email</th>
                <th rowspan="2" field="phone" sortable="true" width="160">Phone</th>
                <th colspan="2" width="320">Job</th>
                <th colspan="4" width="320">Address</th>
            </tr>

            <tr>
                <th field="job.position" width="120">Position</th>
                <th field="job.hire_date" width="120">Hired date</th>
                {{--  --}}
                <th field="address.street" width="120">Street</th>
                <th field="address.street" width="120">District</th>
                <th field="address.city" width="120">City</th>
            </tr>
        </thead>
    </table>

    <script>
        const data = @json($data);

        console.log(data);
        const datagrid = $('#dg').datagrid({
            data: data,
            fitColumns: true
        })
    </script>

</x-app-layout>
