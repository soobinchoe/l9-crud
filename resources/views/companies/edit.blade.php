<x-guest-layout>
    <h1 class="bg-stone-200 mb-6 p-2">Edit New Company</h1>
    <form action="{{ route('companies.update', $company) }}"
          method="POST">
        @method('PUT')
        @csrf
        {{--country name--}}
        <div class="grid grid-cols-2 my-2
                    @error('name')
                    text-red-500
                    bg-red-100
                    @enderror
                    ">
            <label for="CompanyName">Company Name:</label>
            <input type="text" id="CompanyName"
                   name="name" value="{{ old('name') ?? $company->name }}" {{--previous submit--}}
                   placeholder="Edit Company Name"
                   class="ml-2"
                   @error('name')
                   text-red-500
                   bg-red-100
                    @enderror>
            @error('name')
            <p>{{ $errors->first('name') }}</p>
            @enderror
        </div>
        {{--country address--}}
        <div class="grid grid-cols-2 my-2">
            <label for="CompanyAddress">Address:</label>
            <input type="text" id="CompanyAddress"
                   name="address" value="{{ old('address') ?? $company->address }}"
                   placeholder="Edit Company Address"
                   class="ml-2">
        </div>
        {{--country code--}}
        <div class="grid grid-cols-2 my-2">
            <label for="CountryCode">Country:</label>
            <select name="countryCode" id="countryCode"
                    class="ml-2">
                <option value="AUS" @if(old('country')=="AUS") selected @endif>Australia</option>
                <option value="CAN" @if(old('country')=="CAN") selected @endif>Canada</option>
                <option value="USA" @if(old('country')=="USA") selected @endif>United state of America</option>
                <option value="GBR" @if(old('country')=="GBR") selected @endif>Great Britain</option>
                <option value="IRE" @if(old('country')=="IRE") selected @endif>Ireland</option>
                <option value="NZL" @if(old('country')=="NZL") selected @endif>New Zealand</option>
                <option value="ZZZ" @if(old('country')=="ZZZ") selected @endif>Other/Unknown</option>
            </select>
        </div>
        {{--country email--}}
        <div class="grid grid-cols-2 my-2">
            <label for="CompanyEmail">Email:</label>
            <input type="text" id="CompanyAddress"
                   name="email" value="{{ old('email') ?? $company->email }}"
                   placeholder="Edit Company Email"
                   class="ml-2">
            <div>
                @foreach($errors->get('email') as $message)
                    <p>{{ $message }}</p>
                @endforeach
            </div>

        </div>

        {{--save / cancel / back--}}
        <div class="grid grid-cols-2 my-2">
            <label for="Reset"></label>
            <div class="ml-2">
                <button type="submit" id="Save"
                        class="rounded bg-green-700 text-white px-2 py-1 mx-2">
                    Save
                </button>
                <button type="reset" id="Reset"
                        class="rounded bg-blue-700 text-white px-2 py-1 mx-2">
                    Clear
                </button>
                <a class="rounded bg-stone-700 text-white px-2 py-1 mx-2"
                   href="{{ route('companies.index') }}"
                   id="Back">
                    Back
                </a>
            </div>
        </div>
        <div>
            <h3>All errors</h3>
            <div class="bg-red-500 text-white rounded p-4"
            @foreach($errors->all() as $errorMessage)
                <p class="text-small">{{$errorMessage}}</p>
            @endforeach
            </div>
        </div>
    </form>

</x-guest-layout>
