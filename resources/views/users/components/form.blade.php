<form class="w-full max-w-lg" action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method($method)
    <input type="hidden" name="id" value="{{ $user?->id ?? '' }}">
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Name
            </label>
            <input name="name" id="name" placeholder="Name" value="{{ $user?->name ?? '' }}"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text">
        </div>
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Email
            </label>
            <input name="email" id="email" placeholder="Email" value="{{ $user?->email ?? '' }}"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text">
        </div>
        <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                Avatar
            </label>
            <input name="avatar" id="avatar" placeholder="Avatar" value="{{ $user?->avatar ?? '' }}"
                class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text">
        </div>

        @if (!isset($user))
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Password
                </label>
                <input name="password" id="password" placeholder="Password"
                    class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text">
            </div>
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Confirm Password
                </label>
                <input name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                    class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    type="text">
            </div>
        @endif
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
