# &copy;YumiBung - Venue Booking Web Application

Simple project with ability to search for available venue and book them, also see events on the calendar, filtered by venue or booked user.

![Laravel Room Booking screenshot](https://quickadminpanel.com/blog/wp-content/uploads/2020/04/Screen-Shot-2020-04-11-at-9.22.39-PM.png)

---

![Laravel Room Booking screenshot](https://quickadminpanel.com/blog/wp-content/uploads/2020/04/Screen-Shot-2020-04-11-at-9.26.46-PM.png)

---

Adminpanel is generated with Laravel generator.

## Tools
- Laravel 7
- Docker
- Nginx
- MySQL


## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. 
- You can login to adminpanel with default credentials __admin@admin.com__ - __password__ bcrypt('password')
- For Paid bookings, please fill in `.env` with your Stripe credentials

## License

This application is built by the team at Ark Cyber Security Consultants for the sole purpose of knowledge sharing. For more information, please reach out to us at __www.arkcybersecurityconsultants.com__.
