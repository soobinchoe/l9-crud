<x-guest-layout>
    <div class="w-4/5" mx-auto>
    <h1 class="bg-stone-200 mb-6 p-2 py-6 text-2xl">Edit New Product</h1>
    <form action="{{ route('products.update', $product) }}"
          method="POST">
        @method('PUT')
        @csrf
        {{--product name--}}
        <div class="grid grid-cols-2 my-2
                    @error('name')
                    text-red-500
                    bg-red-100
                    @enderror
                    ">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName"
                   name="name" value="{{ old('name') ?? $product->name }}" {{--previous submit--}}
                   placeholder="Edit Product Name"
                   class="ml-2"
                        @error('name') text-red-500 bg-red-100 @enderror>
            @error('name')
            <p> </p>
            <p class="ml-2">{{ $errors->first('name') }}</p>
            @enderror
        </div>
        {{--description--}}
        <div class="grid grid-cols-2 my-2">
            <label for="description">Description:</label>
            <input type="text" id="description"
                   name="description" value="{{ old('description') ?? $product->description }}"
                   placeholder="Enter Product description"
                   class="ml-2">
        </div>
        {{--price--}}
        <div class="grid grid-cols-2 my-2">
            <label for="price">Price:</label>
            <input type="text" id="price"
                   name="price" value="{{ old('price') ?? $product->price }}"
                   placeholder="Enter Product price"
                   class="ml-2">
        </div>
        {{--company name--}}
        <div class="grid grid-cols-2 my-2">
            <label for="companyName">Company Name:</label>
            <div class="ml-2">
            <select name="company_id" id="companyName">
                @foreach($companies as $company)
                    <option value="{{ old('company_id') ?? $company->id}}">
                        {{$company->name}}
                    </option>
                @endforeach
            </select>
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
                   href="{{ route('products.index') }}"
                        id="Back">
                    Back
                </a>
            </div>
        </div>
        <div>
            <h3>All errors</h3>
            <div class="bg-red-500 text-white rounded p-4">
            @foreach($errors->all() as $errorMessage)
                <p class="text-small">{{$errorMessage}}</p>
            @endforeach
            </div>
        </div>
    </form>
    </div>
</x-guest-layout>
