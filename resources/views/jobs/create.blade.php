<x-layout>
    <x-page-heading>Create</x-page-heading>
    
    {{-- {{ dd( Auth::user()->employer->id) }} --}}

    <x-forms.form enctype="multipart/form-data" method="post" action="/jobs">


        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90.000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laracasts, video, education" />

        <x-forms.divider />
            
        <x-forms.btns.btn-info type="submit">Publish</x-forms.btns.btn-info>

    </x-forms.form>

</x-layout>
