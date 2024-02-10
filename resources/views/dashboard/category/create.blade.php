@extends('dashboard.layout.main')
@section('content')
<div class="p-4 sm:ml-64">
    <div class="rounded-lg dark:border-gray-700 mt-14 flex justify-between content-start item-center">
        <h1 class="flex items-center font-bold text-[20px]">Create Categories</h1>
        <a href="" class="bg-gray-600 text-white  px-3 py-2 text-sm rounded-md hover:bg-gray-700">Add Category +</a>
    </div>

    <form class="mt-5" id="categoryForm">
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="category_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category name</label>
                <input type="text" name="category_name" id="category_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Acetate" required>
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Category Icon</label>
                <input name="category_icon" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            </div>
        </div>
        <button onclick="addCategory()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>

<script>
    

    function addCategory() {
        const form = document.getElementById('categoryForm');
        const formData = new FormData(form);

        axios.post('/dashboard/category/create', formData)
            .then(response => {
                // Handle successful response, e.g., show a success message
                console.log(response.data);
            })
            .catch(error => {
                // Handle errors, e.g., show an error message
                console.error(error.response.data);
            });
    }
</script>

@endsection