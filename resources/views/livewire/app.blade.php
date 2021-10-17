<div>
    @foreach($messages as $message)
        <div class="mb-1">{{ $message->user->name }}: {{ $message->message }}</div>
    @endforeach

    <form wire:submit.prevent="send">
        <input type="text" wire:model="message" />
        <button type="submit">Send</button>
    </form>
</div>
