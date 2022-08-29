<x-guest-layout>
    <h1 class="text-stone-700">Companies</h1>
    <div class="my-4">
        <a href="{{ route('companies.create') }}"
           class="bg-stone-700 text-white m-2 p-2" >
            Add New Company
        </a>
    </div>
    <ul class="bg-stone-200 list-disc">


    </ul>
    <table class="table w-full bg-stone-200">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Country</th>
            <th>
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <td>{{ $loop->index +1 }}</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->country_code }}</td>
            <td>
                <a href="{{ route('companies.view', $company->id) }}"
                    class="rounded bg-stone-800 text-white p-2 mt-2 my-2 mx-1">
                    View
                </a>
                <a href="{{ route('companies.edit', $company->id) }}"
                   class="rounded bg-blue-800 text-white p-2 mt-2 my-2 mx-1">
                    Edit
                </a>
                <a href="{{ route('companies.delete', $company->id) }}"
                   class="rounded bg-red-800 text-white p-2 mt-2 my-2 mx-1">
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">
                Navigation
            </td>
        </tr>
        </tfoot>
    </table>
</x-guest-layout>
