@php
    $positionOptions = [
        [
            'label' => 'Frontend Developer',
            'value' => 1,
        ],
        [
            'label' => 'Backend Developer',
            'value' => 2,
        ],
        [
            'label' => 'DevOps',
            'value' => 3,
        ],
    ];
    $genderOptions = [
        [
            'label' => 'Male',
            'value' => 'male',
        ],
        [
            'label' => 'Female',
            'value' => 'female',
        ],
    ];
    $departmentOptions = [
        [
            'label' => 'IT',
            'value' => 1,
        ],
        [
            'label' => 'Accountant',
            'value' => 2,
        ],
    ];
@endphp

<x-app-layout>
    {{-- Form title --}}
    <div class="prose mb-6 prose-h3:mb-0">
        <h3>Add new employee</h3>
        <small class="text-muted">Fill in the form to add new employee</small>
    </div>
    {{-- Form --}}
    <form action="{{ route('api.employee.add') }}" method="POST"
        class="max-w-7x mx-auto w-full rounded-lg bg-background p-4 xl:gap-x-10 xl:px-6 xl:py-10">
        @csrf
        <div class="mb-6 grid w-full grid-flow-col grid-rows-7 gap-6 sm:grid-flow-row sm:grid-cols-1">
            <x-ui.input-field-control name="first_name" :error="$errors" :label="'First name'"
                placeholder="Employee's first name ..." />
            <x-ui.input-field-control name="last_name" :error="$errors" :label="'Last name'"
                placeholder="Employee's last name ..." />
            <x-ui.radio-field-control name="gender" :error="$errors" :label="'Gender'" :options="$genderOptions" />
            <x-ui.input-field-control name="phone_number" :error="$errors" :label="'Phone number'"
                placeholder="xxxx xxx xxx" />
            <x-ui.input-field-control name="personal_email" :error="$errors" :label="'Personal email'" type="email"
                placeholder="example@business.com ..." />
            <x-ui.input-field-control name="business_email" :error="$errors" :label="'Business email'" type="email"
                placeholder="example@email.com" />
            <x-ui.input-field-control name="indentity_number" :error="$errors" :label="'Identity number'"
                placeholder="Employee's ID number ..." />
            <x-ui.input-field-control name="address" :error="$errors" :label="'Address'" />
            <x-ui.input-field-control name="address_district" :error="$errors" :label="'District'" />
            <x-ui.input-field-control name="address_province" :error="$errors" :label="'Province/City'" />
            <x-ui.select-field-control name="department_id" :error="$errors" :label="'Department'" :options="$departmentOptions" />
            <x-ui.select-field-control name="position_id" :error="$errors" :label="'Position'" :options="$positionOptions" />
            <x-ui.input-field-control name="employee_code" :error="$errors" :label="'Employee code'"
                placeholder="xxx-xxx-xxx" />
            <x-ui.input-field-control name="hire_date" type="date" :error="$errors" :label="'Hire date'" />
        </div>
        <x-ui.button type="submit" :variant="'primary'" :icon="'floppy'"
            class="px-4 sm:w-full">{{ __('Save') }}</x-ui.button>
    </form>
</x-app-layout>
