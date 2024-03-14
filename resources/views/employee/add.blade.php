<x-app-layout>
   <div class="prose mb-6 prose-h3:mb-1">
      <h3>Add new employee</h3>
      <span class="text-muted">Fill in the form to add new employee</span>
   </div>
   <form action="{{ route('employee.add') }}" method="POST"
      class="max-w-7x mx-auto grid w-full grid-cols-2 gap-6 gap-y-6 rounded-lg bg-background p-4 xl:gap-x-10 xl:px-6 xl:py-10">
      <x-ui.input-field-control name="user_id" :error="$errors" :label="'User'" placeholder="Select user ..." />
      <x-ui.input-field-control name="first_name" :error="$errors" :label="'First name'"
         placeholder="Employee's first name ..." />
      <x-ui.input-field-control name="last_name" :error="$errors" :label="'Last name'"
         placeholder="Employee's last name ..." />
      <x-ui.input-field-control name="gender" :error="$errors" :label="'Gender'" />
      <x-ui.input-field-control name="identity_number" :error="$errors" :label="'Identity number'"
         placeholder="Employee's ID number ..." />
      <x-ui.input-field-control name="department_id" :error="$errors" :label="'Department'" />
      <x-ui.input-field-control name="position_id" :error="$errors" :label="'Position'" />
      <x-ui.input-field-control name="employee_code" :error="$errors" :label="'Employee code'" />
      <x-ui.input-field-control name="hire_date" type="date" :error="$errors" :label="'Hire date'" />
      <x-ui.input-field-control name="address" :error="$errors" :label="'Address'" />
      <x-ui.input-field-control name="address_district" :error="$errors" :label="'District'" />
      <x-ui.input-field-control name="address_province" :error="$errors" :label="'Province/City'" />
   </form>
</x-app-layout>
