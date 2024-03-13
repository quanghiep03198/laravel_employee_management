@php
    $data = [
        ['avatar' => 'link-to-avatar1.jpg', 'first_name' => 'John', 'last_name' => 'Doe'],
        ['avatar' => 'link-to-avatar2.jpg', 'first_name' => 'Jane', 'last_name' => 'Hello'],
    ];

@endphp

<table id="dg" class="easyui-datagrid"
    data-options="singleSelect:true,collapsible:true,url:'https://jsonplaceholder.typicode.com/users',method:'get'">
    <thead>
        <tr>
            <th data-options="field:'name'">Name</th>
            <th data-options="field:'email'">Email</th>
            <th data-options="field:'address.street'">Street</th>
            <th data-options="field:'address.suite'">Unit Cost</th>
            <th data-options="field:'address.city'">Attribute</th>
        </tr>
    </thead>
</table>
