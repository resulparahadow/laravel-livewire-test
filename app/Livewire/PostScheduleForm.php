<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Models\Post;
use App\Services\InstagramApi;

class PostScheduleForm extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $content = '';

    #[Validate('required')]
    public $schedule_time = '';

    #[Validate('required|file|max:10240')]
    public $file;

    public $accounts;

    public function save()
    {
        $this->validate();

        $filePath = $this->file->store(path: 'files');

        Post::create([
            'content' => $this->content,
            'file' => $filePath,
            'schedule_time' => $this->schedule_time,
        ]);

        session()->flash('success', 'Post successfully updated.');
    }

    public function mount(){
        $instagramApi = new InstagramApi();

        $this->accounts = $instagramApi->searchAccounts('a');
    }

    public function render()
    {
        return view('livewire.post-schedule-form');
    }
}
