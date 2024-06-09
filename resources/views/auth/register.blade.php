<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form enctype="multipart/form-data" method="post" action="/register">
        
 
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="E-mail" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>
        <x-forms.input label="Password Confirmation" name="password_confirmation" type="password"/>

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer"/>

        <x-forms.input label="Employer Logo" name="logo" type="file" />
        <x-forms.btns.btn-info type="submit">Create a Account</x-forms.btns.btn-info>
    </x-forms.form>

</x-layout>
