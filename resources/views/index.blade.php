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


    <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in">

            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">20</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-100 ease-in hover:border-gray-400">Vote</button>
                    </div>
                </div>
            </div>

            <div class="flex px-2 py-6">

                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=1"
                        alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">

                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">A random headline of an
                            Idea</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
                        reiciendis hic corporis temporibus? Deleniti quod doloremque rerum, deserunt cumque magni quasi
                        libero aperiam nulla. Dolorem quo repellat dignissimos earum consequatur!</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>4 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href=""
                                            class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Mark as
                                            Spam</a></li>
                                    <li><a href=""
                                            class="hover:bg-gray-100 transition duration-150 ease-in block px-5 py-3">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end idea-container -->

    </div> <!-- 1 end ideas-container -->

    <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in">

            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">66</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-blue text-white border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-100 ease-in hover:border-gray-400">Voted</button>
                    </div>
                </div>
            </div>

            <div class="flex px-2 py-6">

                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=2"
                        alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">

                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Another random headline of an
                            Idea</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
                        reiciendis hic corporis temporibus? Deleniti quod doloremque rerum, deserunt cumque magni quasi
                        libero aperiam nulla. Dolorem quo repellat dignissimos earum consequatur!</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>4 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-yellow text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                In Progress</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end idea-container -->

    </div> <!-- 2 end ideas-container -->

     <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in">

            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">0</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-100 ease-in hover:border-gray-400">Vote</button>
                    </div>
                </div>
            </div>

            <div class="flex px-2 py-6">

                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=3"
                        alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">

                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Yet another random headline of an
                            Idea</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
                        reiciendis hic corporis temporibus? Deleniti quod doloremque rerum, deserunt cumque magni quasi
                        libero aperiam nulla. Dolorem quo repellat dignissimos earum consequatur!</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>4 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-red text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Closed</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end idea-container -->

    </div> <!-- 3 end ideas-container -->

     <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in">

            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">100</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-100 ease-in hover:border-gray-400">Vote</button>
                    </div>
                </div>
            </div>

            <div class="flex px-2 py-6">

                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=4"
                        alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">

                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">2nd Last random headline of an
                            Idea</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
                        reiciendis hic corporis temporibus? Deleniti quod doloremque rerum, deserunt cumque magni quasi
                        libero aperiam nulla. Dolorem quo repellat dignissimos earum consequatur!</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>22 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-green text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Implemented</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end idea-container -->

    </div> <!-- 4 end ideas-container -->

     <div class="ideas-container space-y-6 my-6">

        <div class="idea-container bg-white rounded-xl flex hover:shadow-card cursor-pointer transition duration-150 ease-in">

            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">2</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 transition duration-100 ease-in hover:border-gray-400">Vote</button>
                    </div>
                </div>
            </div>

            <div class="flex px-2 py-6">

                <a href="#" class="flex-none"><img src="https://source.unsplash.com/200x200/?face&crop=face&v=4"
                        alt="avatar" class="w-14 h-14 rounded-xl"></a>
                <div class="mx-4">

                    <h4 class="text-xl font-semibold"><a href="#" class="hover:underline">Last random headline of an
                            Idea</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
                        reiciendis hic corporis temporibus? Deleniti quod doloremque rerum, deserunt cumque magni quasi
                        libero aperiam nulla. Dolorem quo repellat dignissimos earum consequatur!</div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>22 hours ago</div>
                            <div>&bull;</div>
                            <div>Category</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div
                                class="bg-purple text-white text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-5">
                                Considering</div>
                            <button
                                class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg fill="currentColor" width="24" height="6">
                                    <path
                                        d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"
                                        style="color: rgba(163, 163, 163, .5)">
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end idea-container -->

    </div> <!-- 5 end ideas-container -->

</x-app-layout>
