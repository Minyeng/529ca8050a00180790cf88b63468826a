### Setup
```hash
composer install
cp .env.example .env
php artisan db:init
php artisan migrate --seed
```

### How to start
Run `php artisan serve` to start the project, and run `php artisan queue:work` on the other tab to start the queue .


### How to use
**POST** `/api/email` - to send an email.

**Request**
```json
{
    "email": "anything@ymail.com",
    "subject": "-------",
    "text": "--------"
}
```
**Header**<br/><br/>
**Content-Type :** application/json,<br/>
**Authorization :** Bearer CXsvQ9ttsYTTboAvNnfG7m7ZQ7n0YROxT5tBUNPsk0etYq8d9WR3KqwImWCe
