<?php

namespace App\Http\Livewire;

use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class App extends Component
{
    public $message;
    public $messages;

    protected $listeners = ['echo:chat,MessageSent' => 'reloadMessages'];

    public function render()
    {
        $this->messages = Message::all();

        return view('livewire.app');
    }

    public function send()
    {
        $user = Auth::user();

        $message = $user->messages()->create([
            'message' => $this->message
        ]);

        $this->reset();

        broadcast(new MessageSent($user, $message))->toOthers();
    }

    public function reloadMessages($event)
    {
        $this->messages->concat($event['message']);
    }
}
