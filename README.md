## Realtime chat box

Referer:
- https://pusher.com/tutorials/chat-laravel/
- https://calebporzio.com/video-realtime-livewire-w-laravel-echo-pusher
- https://laravel-livewire.com/docs/2.x/events
- https://laravel-livewire.com/docs/2.x/laravel-echo
- 

### Run this project:
```bash
$ composer install
$ php artisan migrate
```
Registers an account in https://dashboard.pusher.com/accounts/sign_up

Config pusher API in `.env` file:
```dotenv
PUSHER_APP_ID=xxx
PUSHER_APP_KEY=xxx
PUSHER_APP_SECRET=xxx
PUSHER_APP_CLUSTER=ap1
```
Build the app:
```bash
$ npm install
$ npm run dev
```
Run it:
```bash
$ php artisan serve
```

