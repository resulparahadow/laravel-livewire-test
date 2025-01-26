<div>
    <div class="flex min-h-screen items-center justify-center p-6">
        <div class="mx-auto flex flex-col sm:w-full lg:max-w-3xl">
            <div class="text-3xl font-bold">Post Scheduler form</div>
            <div id="flash-message"
                class="fixed right-4 top-4 hidden rounded bg-green-100 px-4 py-2 text-green-800 shadow-md">
                <span id="flash-text"></span>
            </div>

            <form wire:submit.prevent="save" class="mt-8 w-full space-y-4">
                <div class="mb-6">
                    <label for="content" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Post
                        Content</label>
                    <textarea id="content" rows="4" wire:model="content"
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                        placeholder="Write your content here..."></textarea>
                    @error('content')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="accounts" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Select an
                        Account</label>
                    <select id="accounts" wire:model="account_id"
                        class="mb-6 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                        <option selected></option>
                        @foreach ($accounts['users'] as $account)
                            <option wire:key="{{ $account['pk'] }}" value="US">{{ $account['full_name'] }}</option>
                        @endforeach
                    </select>
                    @error('account_id')
                        <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white" for="file">Select
                        File</label>
                    <input wire:model="file"
                        class="block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                        id="file" type="file" />
                    @error('file')
                        <span class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="schedule_time" class="block font-medium">Date & Time</label>
                    <input type="datetime-local" id="schedule_time" wire:model="schedule_time" min=""
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                    @error('schedule_time')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-white">
                    Schedule Post
                </button>
            </form>
            <a class="mt-6 text-2xl text-blue-500 decoration-current" href="{{ route('posts') }}">List posts</a>
        </div>
    </div>
</div>
