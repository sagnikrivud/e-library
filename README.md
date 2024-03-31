# e-library

![](https://cdn.icon-icons.com/icons2/2699/PNG/512/laravel_logo_icon_170314.png)

Library management systems are designed to manage the movement of books and maintain records of the members in a library. The software solution is designed based on the system requirements, the people involved, the content of the operation, and the activity to be performed.

The system requirement in library management focuses on the possibility of searching for books by title, author or subject by the member. They should be able to locate a book physically by the unique identification code and the rack number for each book.
The system should provide details on the books held by the members. The system should limit the number of books that can be taken and the number of days that a book can be kept for. The system should generate fines when due from the member.
# Versions and compatibility

- [Php 8.0]() or higher is required
- [Apache 2]()
- [Composer 2.0]()
- [Mysql]()
- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [DomPDF](https://github.com/dompdf/dompdf/releases)
- [json]() (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Status
### <img src="https://image.similarpng.com/very-thumbnail/2021/06/Hazard-warning-attention-sign-with-exclamation-mark-symbol-on-transparent-background-PNG.png" alt="Note" width="18" title="Please check status">Under Development

## Installation
>Please follow this steps, and also refer to the code blocks for this setup using php dependency  manager (composer).
Open the terminal and run this command, but you need to remember that the user file or folder write permission should be given under the same group, like user: sudo and group: www-data

```sh
$ git clone https://github.com/sagnikrivud/e-library.git
```
```sh
$ cp .env.example .env
```
```sh
$ composer install
```
```sh
$ php artisan key:generate
```
```sh
$ cp .env.example .env
```
> Setup .env configuration for Database connect
```env
HOST=''
DB_USER=''
DB_PASSWORD=''
DB_NAME=''
PORT=3306
```
> Migrate Database
```sh
$ php artisan migrate
```
