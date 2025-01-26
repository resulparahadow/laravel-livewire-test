<?php

namespace App\Livewire;

use App\Mail\VerificationMail;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Services\InstagramApi;
use Illuminate\Support\Facades\Mail;

class PostScheduleForm extends Component
{
    use WithFileUploads;

    #[Validate('required')]
    public $content = '';

    #[Validate('required|date')]
    public $schedule_time = '';

    #[Validate('required|file|max:10240')]
    public $file;

    #[Validate('required')]
    public $account_id;

    public $accounts;

    public function save()
    {
        $this->validate();

        $filePath = $this->file->store(path: 'files');

        $user = User::first();

        $user->posts()->create([
            'content' => $this->content,
            'file' => $filePath,
            'schedule_time' => $this->schedule_time,
            'account_id' => $this->account_id,
        ]);

        Mail::to($user->email)->send(new VerificationMail());

        session()->flash('success', 'Post successfully created!');

        return $this->redirect('/');
    }

    public function mount(InstagramApi $instagramApi){
        // this 'a' is for testing purpose, it will be fetched depending on user input
        $this->accounts = $instagramApi->searchAccounts('a');
    }

    public function render()
    {
        return view('livewire.post-schedule-form');
    }
}
