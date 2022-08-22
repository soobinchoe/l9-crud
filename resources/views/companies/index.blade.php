<x-guest-layout>
    <h1 class="text-stone-700">Companies</h1>

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
            <td>#</td>
            <td>{{ $company->name }}</td>
            <td>{{ $company->country_code }}</td>
            <td>
                <a href="{{ route('companies.view', $company->id) }}"
                    class="rounded bg-stone-800 text-white p-2 mt-2 my-2 mx-1">
                        View
                </a>
                <a href="">
                        Edit
                </a>
                Delete
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
