<x-guest-layout>
    <h1>Company Details</h1>

    <dl class="grid grid-cols-2">
        <dt>Name</dt>
        <dd>{{ $company->name }}</dd>
        <dt>Address</dt>
        <dd>{{ $company->address }} <br>
            {{ $company->country_code }}</dd>
        <dt>Contact</dt>
        <dd>{{ $company->email }}</dd>
    </dl>
    <p>
        <form action="{{ route('companies.destroy', $company) }}" method="post">
        @csrf
        @method('POST')
        <button type="submit" name="delete"
                class="rounded bg-red-500 text-white px-2 py-1 mr-2">
            Delete
        </button>
        <a href="{{ route('companies.index') }}"
            class="rounded bg-stone-800 text-white px-2 py-1 mr-2">
            Cancel
        </a>
    </form>
    </p>

</x-guest-layout>
