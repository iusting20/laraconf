<?php

use function Livewire\Volt\{state};

state(['channel', 'messages', 'subscribed']);

mount(function ($channel) {
    $this->messages = $this->channel->getMessages()->toArray();
    $this->subscribed = $this->channel->isSubscribed(auth()->user());
});

$join = fn () => ($this->subscribed = $this->channel->subscribe(auth()->user()));

$send = fn (string $message) => $this->channel->send($auth()->user(), $message);

?>

<div>
    <div class="bg-red overflow-hidden shadow-xl sm:rounded-lg border border-gray-200">
        <div class="p-6 text-gray-900">
            <div class="space-y-4 max-h-96 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                {{-- Messages will go here --}}
            </div>
            
            <div class="mt-6 border-t pt-4">
                <form class="flex gap-3">
                    <input type="text" 
                           class="flex-1 rounded-lg border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200 shadow-sm" 
                           placeholder="Type your message...">
                    <button type="submit" 
                            class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-sm transition duration-200 transform hover:scale-105 active:scale-95">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>