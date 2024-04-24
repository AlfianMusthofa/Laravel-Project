@extends('dashboard.layouts.main')

@section('container')
    <div class="flex">
        @include('dashboard.layouts.sidebar')
        <div class="tableContent border border-red-500 p-4">
            <!-- component -->
            <div class="flex flex-col border p-[15px] rounded-md shadow-md">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr class="bg-[#d6d6d6]">
                                        <th scope="col" class="px-6 py-3">No</th>
                                        <th scope="col" class="px-6 py-3">Image</th>
                                        <th scope="col" class="px-6 py-3">Name</th>
                                        <th scope="col" class="px-6 py-3">Price</th>
                                        <th scope="col" class="px-6 py-3">Category_id</th>
                                        <th scope="col" class="px-6 py-3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $item)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-2 font-medium w-[50px]">
                                                {{ $loop->iteration }}</td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                <div class="w-[100px] line-clamp-1">
                                                    <p>{{ $item['image'] }}</p>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">
                                                <div class="w-[150px] line-clamp-1">
                                                    <p>{{ $item['name'] }}</p>
                                                </div>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-2">{{ $item['price'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-2">{{ $item['category_id'] }}</td>
                                            <td class="whitespace-nowrap px-6 py-2 flex gap-[5px]">
                                                <form action="/dashboard/upload/{{ $item->id }}" method="post">
                                                    @csrf
                                                    @method('get')
                                                    <button type="submit"
                                                        class="size-[30px] flex items-center justify-center bg-[#4d88ff]">
                                                        <i class="fa-solid fa-eye" style="color: white"></i>
                                                    </button>
                                                </form>
                                                <a href="#"
                                                    class="size-[30px] flex items-center justify-center bg-yellow-300"><i
                                                        class="fa-solid fa-pencil" style="color: white"></i></a>
                                                <form action="/dashboard/upload/{{ $item->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="size-[30px] flex items-center justify-center bg-red-500"
                                                        onclick="return confirm('Anda yakin ?')"><i
                                                            class="fa-solid fa-trash-can" style="color: white"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{ $products->links() }}
        </div>
    </div>
@endsection
