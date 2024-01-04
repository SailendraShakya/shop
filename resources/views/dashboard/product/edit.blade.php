@extends('main')
@section('content')
<div x-data="basic">
    <div>
        <button type="button" class="btn btn-primary flex" @click="addEditProject()">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                class="h-5 w-5 ltr:mr-3 rtl:ml-3">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            <a href="{{ route('product.index') }}">Products</a>
        </button>
    </div>


    <div class="panel mt-6">

        <h5 class="text-lg font-semibold dark:text-white-light">Products</h5>


        <form class="space-y-5" method="post" action="{{route('product.update', $product->id)}}">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="gridName">Name</label>
                    <input id="name" name="name" type="text" placeholder="Enter Name" class="form-input"
                        value="{{ $product->name }}" />
                </div>
                <div>
                    <label for="gridPrice">Price</label>
                    <input id="price" name="price" type="text" placeholder="Enter Price" class="form-input"
                        value="{{ $product->price }}" />
                </div>
            </div>
            <div>
                <label for="gridDescription">Description</label>
                <input id="description" name="description" type="text" placeholder="Enter Description" value="
                    {{ $product->description }}" class="form-input" />
            </div>
            <div>
                <label for="gridImage">Image</label>
                <input id="image" name="image" type="text" placeholder="Enter Image" value="{{ $product->image }}"
                    class="form-input" />
            </div>
            <button type=" submit" class="btn btn-primary !mt-6">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection