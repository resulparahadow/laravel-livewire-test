<div>
    <div class="flex items-center justify-center">
        <div id="flash-message"
            class="fixed right-4 top-4 hidden rounded bg-green-100 px-4 py-2 text-green-800 shadow-md">
            <span id="flash-text"></span>
        </div>

        <form wire:submit.prevent="save" class="space-y-4 p-6">
            <div>
                <label for="content" class="block font-medium">Post Content</label>
                <textarea id="content" wire:model="content" class="w-full rounded-md border"></textarea>
                @error('content')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="file" class="block font-medium">Upload File</label>
                <input type="file" id="file" wire:model="file" class="w-full">
                @error('file')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="schedule_time" class="block font-medium">Date & Time</label>
                <input type="datetime-local" id="schedule_time" wire:model="schedule_time"
                    class="w-full rounded-md border">
                @error('schedule_time')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-white">
                Schedule Post
            </button>
        </form>

    </div>
</div>
