@extends('dashboard.layouts.main')

@section('container')
    <div class="flex">
        @include('dashboard.layouts.sidebar')
        <div class="tableContent border border-red-500 p-4">
            <form action="/dashboard/upload" method="post"
                class="border p-4 w-[400px] flex flex-col gap-3 mt-[10px] rounded-md shadow-md" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-[3px]">
                    <label for="name" class="text-[13px]">Name</label>
                    <input type="text" name="name" id="name" class="text-[15px] p-[5px]" required>
                </div>
                <div class="flex flex-col gap-[3px]">
                    <label for="price" class="text-[13px]">Price</label>
                    <input type="number" name="price" id="price" class="text-[15px] p-[5px]">
                </div>
                <div class="flex flex-col gap-[3px]">
                    <label for="category_id" class="text-[13px]">Category_id</label>
                    <input type="text" name="category_id" id="category_id" class="text-[15px] p-[5px]">
                </div>
                <div class="flex flex-col gap-[3px]">
                    <label for="image" class="text-[13px]">Image</label>
                    <input type="file" name="image" id="image" class="p-[5px]">
                </div>
                <button type="submit" class="border text-[12px] p-[10px] bg-[#33ff33] text-white rounded-md">Save</button>
            </form>
        </div>
    </div>
@endsection
