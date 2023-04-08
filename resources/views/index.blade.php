<x-app-layout>
    <div class="filters flex space-x-6">

        <div class="w-1/3">
            <select name="idea-category" id="idea-category" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Category 1">Category 1</option>
                <option value="Category 2">Category 2</option>
                <option value="Category 3">Category 3</option>
                <option value="Category 4">Category 4</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other-filters" id="other-filters" class="w-full rounded-xl px-4 py-2 border-none">
                <option value="Other Filters">Other Filters</option>
                <option value="Filter 1">Filter 1</option>
                <option value="Filter 2">Filter 2</option>
                <option value="Filter 3">Filter 3</option>
            </select>
        </div>
        <div class="w-2/3 relative">


            <input type="search" name="search" placeholder="Find an idea" id=""
                class="w-full rounded-xl px-4 py-2 border-none bg-white pl-8 placeholder:text-gray-900">

            <div class="absolute top-0 flex items-center h-full ml-2"> <svg class="w-4 text-gray-700" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg></div>
        </div>

    </div> <!-- end filters -->

</x-app-layout>
