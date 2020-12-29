# LARAVEL RESTFUL API
by Bagus Bayu Sasongko
## Tool
1. Composer
2. Laravel
3. Postman

## Install
1. Clone Repository ini
2. Pada terminal arahkan ke folder repo ini, lalu ketikan perintah `composer install`
3. Buatlah database dengan nama *"akademik"* 
4. Buat table *"mahasiswa"* dengan atribut *nim, nama, kelas, prodi*, dan *fakultas*
5. Ketik perintah ini untuk migrate database `php artisan migrate`
6. Jalankan server dengan perintah `php artisan serve`

## Penggunaan

Daftar endpoint api
|Method | Endpoint  | Parameter
|--|--|--|
| get | /api/mahasiswa  | none |
| post | /api/mahasiswa/insert  | body(nim, nama, kelas, prodi, fakultas) |
| post | /api/mahasiswa/update/{id}  | body(nim, nama, kelas, prodi, fakultas) |
| post | /api/mahasiswa/delete/{id}  | none |

 - **Get data mahasiswa**
Pada postman, ubah method menjadi ***GET*** lalu masukan url `http://127.0.0.1:8000/api/mahasiswa`.

 - **Insert data mahasiswa**
Pada postman, ubah method menjadi ***POST***, pilih ***Body*** dan ***x-www-form-urlencode***. Setelah itu masukkan url `http://127.0.0.1:8000/api/mahasiswa/insert` dan isi body dengan nim, nama, kelas, prodi, dan fakultas.

 - **Update data mahasiswa**
Pada postman, ubah method menjadi ***POST***, pilih ***Body*** dan ***x-www-form-urlencode***. Setelah itu masukkan url `http://127.0.0.1:8000/api/mahasiswa/update/{id}`, pada url ***id*** diganti *nim* data mahasiswa yang akan dirubah. Isi body dengan nim, nama, kelas, prodi, dan fakultas.

 - **Delete data mhasiswa**
Pada postman, ubah method menjadi ***POST*** lalu masukkan url `http://127.0.0.1:8000/api/mahasiswa/delete/{id}`, pada url ***id*** diganti *nim* data mahasiswa yang akan dihapus.
