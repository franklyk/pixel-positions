<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="post" action="/login">
        
 
        <x-forms.input label="E-mail" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.btns.btn-info type="submit">Log In</x-forms.btns.btn-info>
    </x-forms.form>

</x-layout>
