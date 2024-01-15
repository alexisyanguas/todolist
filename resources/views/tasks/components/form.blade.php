<form class="w-full max-w-lg" action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                Title
            </label>
            <input name="title" id="title" placeholder="Title" value="{{ $task?->title ?? '' }}"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text">
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> border-red-500 --}}
        </div>
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                Description
            </label>
            <textarea name="description" id="description" placeholder="Description"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">{{ $task?->description ?? '' }}</textarea>
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> border-red-500 --}}
        </div>
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="user">
                User
            </label>
            <select name="user_id" id="user_id"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}"
                        {{ isset($task) && $task->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
            {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> border-red-500 --}}
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <button type="submit"
                class="
                border rounded py-2 px-4 bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50
                ">
                {{ $title }}
            </button>
        </div>
    </div>
</form>
