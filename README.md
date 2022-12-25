### Setup
```hash
composer install
cp .env.example .env
php artisan db:init
php artisan migrate --seed
```

### How to use
**POST** `/api/email` - send an email.

**Request**
```json
{
    "email": "anything@ymail.com",
    "subject": "-------",
    "text": "--------"
}
```
by **Header**
**Content-Type :** application/json,
**Authorization :** Bearer CXsvQ9ttsYTTboAvNnfG7m7ZQ7n0YROxT5tBUNPsk0etYq8d9WR3KqwImWCe
