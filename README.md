# Praktikum Pemrograman Web 2 (Praktikum 1-11)

**Nama:** Viona Martha Rayendra  
**NIM:** 312310122  
**Kelas:** TI.23.C2  
---

## Praktikum 1: PHP Framework (CodeIgniter)

1. Mengaktifkan Ekstensi PHP di XAMPP

    Pada langkah ini, XAMPP Control Panel digunakan untuk mengaktifkan ekstensi PHP yang diperlukan agar CodeIgniter dapat berjalan dengan baik. Dengan mengklik tombol Config pada Apache, lalu memilih PHP (php.ini), file konfigurasi PHP dibuka di Notepad. Dalam file ini, beberapa ekstensi seperti curl, mysqli, dan intl perlu diaktifkan dengan menghapus tanda ; di depannya. Setelah disimpan, Apache harus direstart agar perubahan berlaku.
   ![image](https://github.com/user-attachments/assets/cf4940f4-7b59-4252-8b42-6a44664fff9f)
   
   ![image](https://github.com/user-attachments/assets/bda8cf05-ab02-4f6e-b3ef-ff0b77ef975a)

2. Instalasi Codeigniter 4

   Setelah konfigurasi PHP disesuaikan, CodeIgniter dijalankan di browser dengan mengakses localhost:8080. Jika instalasi berhasil, halaman Welcome to CodeIgniter 4.6.0 akan muncul, yang menunjukkan bahwa framework telah terpasang dengan benar dan server pengembangan berjalan dengan baik.

   ![image](https://github.com/user-attachments/assets/01b7e187-7271-418a-bef4-edda7d46e0bb)

3. Menggunakan Command Line Interface (CLI) CodeIgniter

    Untuk memverifikasi bahwa CLI CodeIgniter berfungsi dengan benar, terminal atau Command Prompt dibuka dan perintah php spark dijalankan di dalam direktori proyek CodeIgniter. Perintah ini menampilkan daftar perintah CLI yang tersedia dalam CodeIgniter, termasuk perintah untuk menjalankan server pengembangan dan mengelola database.

    ![image](https://github.com/user-attachments/assets/799a6737-0e56-4128-b5f3-807a1edc9e4b)

4. Mengaktifkan Mode Debugging
   
   Agar error dapat dideteksi lebih mudah, mode debugging diaktifkan dengan mengedit file .env di root proyek CodeIgniter. Nilai CI_ENVIRONMENT diubah menjadi development, yang memungkinkan sistem menampilkan informasi error secara lebih rinci saat terjadi kesalahan dalam pengembangan aplikasi.

   ![image](https://github.com/user-attachments/assets/f3193c72-9ce4-4d2b-a827-0b7fef0ed699)

   ![image](https://github.com/user-attachments/assets/79204100-bc74-4737-8f74-c48960601503)

   ![image](https://github.com/user-attachments/assets/24499f95-0bb8-4cf3-bb29-afdc47d150b7)


5. Routing dan Controller

   Dalam file app/Config/Routes.php, rute baru ditambahkan untuk menghubungkan URL tertentu dengan controller yang sesuai. Contoh rute yang ditambahkan meliputi /about, /contact, dan /faqs, masing-masing dikaitkan dengan fungsi dalam controller Page. Setelah rute ditambahkan, perintah php spark routes dijalankan untuk melihat daftar rute yang telah terdaftar.

    ![image](https://github.com/user-attachments/assets/3c80be2f-430f-4019-8e9b-0851e3caaec1)
  
    ![image](https://github.com/user-attachments/assets/74af04d4-412b-4593-a865-4ebefd7618b2)

6. Mengakses Halaman dari Routing yang Dibuat

   Setelah routing ditambahkan, halaman baru diuji dengan mengakses localhost:8080/about di browser. Jika routing dan controller telah dikonfigurasi dengan benar, halaman akan menampilkan teks "Ini halaman About", yang menunjukkan bahwa sistem routing dalam CodeIgniter telah berfungsi sebagaimana mestinya.

   ![image](https://github.com/user-attachments/assets/916eb61e-e66d-476a-836d-e1aa816276b5)

   Tampilan menunjukkan heading "Halaman About" diikuti dengan deskripsi yang menjelaskan isi halaman tersebut.
   
   ![image](https://github.com/user-attachments/assets/6eea657b-b22f-4c92-bb35-978777ac4f31)

   Pada langkah ini, halaman Term of Services berhasil ditampilkan dengan URL localhost:8080/page/tos. Tampilan menunjukkan teks sederhana "Ini halaman Term of Services", yang mengindikasikan bahwa routing dan controller telah dikonfigurasi dengan benar untuk menampilkan halaman ini.
   
   ![image](https://github.com/user-attachments/assets/ca5b5503-4802-42d1-806e-54a76da4dd89)

7. Mengimplementasikan Layout Web dengan CSS

   Langkah ini menunjukkan penerapan layout sederhana menggunakan CSS pada halaman About. Halaman kini memiliki struktur yang lebih rapi, dengan menu navigasi di bagian atas yang mencakup Home, Artikel, About, dan Kontak, serta sidebar yang berisi Widget Header dan Widget Text. Footer di bagian bawah juga telah ditambahkan dengan informasi hak cipta.

   ![image](https://github.com/user-attachments/assets/6fd64995-86c5-4323-a843-ab3171e4e792)

**Kesimpulan:**
1. Langkah pertama dimulai dengan mengaktifkan ekstensi PHP di XAMPP melalui file php.ini untuk memastikan CodeIgniter dapat berjalan dengan optimal. Setelah itu, CodeIgniter diinstal dan dijalankan di browser untuk memastikan konfigurasi awal berhasil.
Selanjutnya, fitur Command Line Interface (CLI) digunakan dengan perintah php spark untuk mengakses berbagai fitur bawaan CodeIgniter. Untuk mendukung proses debugging, mode pengembangan diaktifkan dengan mengedit file .env, sehingga error dapat ditampilkan secara lebih detail.

2. Routing kemudian diatur dalam file Routes.php untuk menghubungkan URL tertentu dengan controller yang sesuai, seperti /about, /contact, dan /faqs. Setelah routing berhasil dibuat, halaman-halaman ini diuji melalui browser dan menampilkan teks yang sesuai, menunjukkan bahwa konfigurasi routing berfungsi dengan baik.
   
3. Sebagai tahap akhir, tampilan web ditingkatkan dengan menerapkan layout berbasis CSS, yang mencakup menu navigasi, sidebar, serta footer dengan informasi hak cipta. Dengan implementasi ini, tampilan halaman menjadi lebih terstruktur dan profesional. 


## Praktikum 2: Framework Lanjutan (CRUD)

1. Membuat Database dan Tabel

   Langkah awal dilakukan dengan membuat database bernama lab_ci4 dan sebuah tabel artikel melalui phpMyAdmin. Tabel ini dirancang untuk menyimpan data artikel seperti id, judul, isi, gambar, status, dan slug. Struktur tabel disusun agar dapat menampung data yang dibutuhkan untuk ditampilkan maupun dikelola di sistem portal berita berbasis CodeIgniter 4.

   ![image](https://github.com/user-attachments/assets/11fe6714-cdb0-4f61-ab89-325c9192baf8)

2. Konfigurasi Koneksi Database
  
     Supaya aplikasi bisa berinteraksi dengan database, dilakukan konfigurasi koneksi pada file .env di folder project. Nilai-nilai seperti hostname, nama database, username, dan password disesuaikan dengan server lokal yang digunakan, yaitu localhost, lab_ci4, dan root. Konfigurasi ini memastikan CodeIgniter 4 dapat membaca dan menulis data ke MySQL.

     ![image](https://github.com/user-attachments/assets/28181865-4b79-463a-a3d4-e40ecb24c484)


3. Membuat Model

     Sebuah model bernama ArtikelModel dibuat di dalam folder Models untuk menjembatani antara database dan controller. Model ini mendefinisikan tabel artikel, primary key-nya, dan kolom-kolom yang diperbolehkan untuk diisi atau diubah. Model ini akan digunakan di controller untuk mengambil atau memproses data artikel dari database.

     ![image](https://github.com/user-attachments/assets/fc18306a-2250-401b-996a-831fef42fa88)

4. Membuat Controller

     Controller bernama Artikel dibuat untuk menangani request dari user dan memanggil model ArtikelModel untuk mengambil seluruh data artikel. Data yang diambil kemudian dikirim ke view agar dapat ditampilkan. Fungsi ini berfungsi sebagai penghubung utama antara data dan tampilan di browser pengguna.

     ![image](https://github.com/user-attachments/assets/a1ef53b5-8178-4e98-8269-163fda040084)

5. Membuat View

     Halaman view artikel/index.php dirancang untuk menampilkan daftar artikel yang tersedia. Tampilan disusun agar setiap artikel menampilkan judul sebagai link, potongan isi, dan gambar jika tersedia. View ini menerima data dari controller dan menyajikannya dalam format HTML yang responsif dan mudah dibaca.

     ![image](https://github.com/user-attachments/assets/79433ca6-3f05-444b-83d9-046544cffa08)

     ![image](https://github.com/user-attachments/assets/69fc4ee3-d1cd-4579-a969-7e52f78709b3)

     Dilakukan modifikasi agar jika gambar tersedia, maka akan ditampilkan seperti biasa, namun jika tidak ada atau tidak ditemukan, hanya akan muncul teks "(Gambar tidak tersedia)".
     
     ![image](https://github.com/user-attachments/assets/578563fe-b302-46f7-a4bc-e5cc8e4338b2)


6. Membuat Tampilan Detail Artikel

     Ketika salah satu artikel diklik, pengguna akan diarahkan ke halaman detail berdasarkan slug. Di halaman ini, ditampilkan informasi lengkap seperti judul dan isi artikel, serta pemberitahuan jika gambar tidak tersedia. Routing dan tampilan detail ini penting agar pengguna dapat membaca artikel secara menyeluruh.

     ![image](https://github.com/user-attachments/assets/8d4b5018-72a8-4e20-b06c-473766bafd00)

7. Membuat Menu Admin

     Sebuah dashboard admin ditampilkan untuk mengelola artikel yang ada. Di halaman ini, data artikel ditampilkan dalam bentuk tabel yang dilengkapi dengan tombol untuk mengubah dan menghapus artikel. Status artikel seperti "Draft" juga ditampilkan untuk membedakan artikel yang sudah atau belum dipublikasikan. Modifikasi tampilan Admin Portal Berita dilakukan agar lebih rapi dan mudah digunakan.

     ![image](https://github.com/user-attachments/assets/a9af773d-1ac8-4ab1-874c-8df0a4b19c28)


8. Menambah Data Artikel

     Halaman untuk menambah artikel baru disediakan bagi admin dengan form input sederhana yang terdiri dari judul dan isi artikel. Setelah form diisi dan tombol "Kirim" ditekan, data akan diproses dan disimpan ke database. Fitur ini memungkinkan admin untuk terus menambahkan konten baru ke dalam portal berita.

     ![image](https://github.com/user-attachments/assets/2f76f894-6bcd-4eca-9c98-df455ae9dd75)


9. Mengubah Data

     Fitur ubah artikel dapat diakses dari daftar artikel admin dengan menekan tombol "Ubah". Halaman form edit akan menampilkan data lama yang bisa diedit, lalu disimpan kembali ke database. Fitur ini sangat berguna untuk memperbarui konten yang sudah ada tanpa harus membuat artikel baru.

     ![image](https://github.com/user-attachments/assets/3fa8968b-549e-404f-ab8a-e4e88feac172)


10. Menghapus Data

    Tindakan menghapus data dilakukan dari halaman admin dengan menekan tombol "Hapus" yang ada pada setiap baris artikel. Sebelum data benar-benar dihapus dari database, sistem akan menampilkan konfirmasi melalui pop-up untuk memastikan bahwa pengguna yakin ingin menghapus artikel tersebut. Fitur ini penting untuk mencegah penghapusan data secara tidak sengaja oleh admin.

    ![image](https://github.com/user-attachments/assets/37f50b7a-e27d-429f-9d3c-7f1f66c7b001)


**Kesimpulan** 

  Proyek pembuatan portal berita berbasis CodeIgniter 4 ini mencakup serangkaian proses mulai dari pembuatan database hingga fitur CRUD (Create, Read, Update, Delete) artikel. Setiap komponen—mulai dari model, controller, hingga view—dikonfigurasi agar saling terhubung dan mendukung fungsionalitas sistem secara menyeluruh. Melalui dashboard admin, pengguna dapat menambah, menampilkan, mengubah, dan menghapus data artikel dengan mudah. Implementasi ini menunjukkan bagaimana framework CodeIgniter 4 dapat digunakan secara efektif untuk membangun aplikasi web dinamis dan terstruktur. 


  ## Praktikum 3: View Layout dan View Cell

  1. Membuat Layout Utama

     File main.php pada folder layout berfungsi sebagai template layout utama yang berisi struktur dasar HTML seperti header, navigasi, dan sidebar. Layout ini menggunakan Bootstrap untuk styling dan menyediakan slot renderSection('content') yang akan diisi oleh setiap halaman konten. Dengan layout ini, tampilan halaman menjadi konsisten dan lebih terorganisir di seluruh bagian aplikasi.
     
     ![image](https://github.com/user-attachments/assets/1dea55ec-f7cf-41fc-b17f-c7ae97e5eeea)

   2. Modifikasi File View

      File view seperti Home.php dimodifikasi untuk menggunakan layout utama dengan extend('layout/main') dan menyisipkan konten melalui section('content'). Pendekatan ini memungkinkan setiap halaman memiliki konten dinamis tanpa harus mengulang struktur HTML keseluruhan, sehingga lebih efisien dan mudah dikelola.

      ![image](https://github.com/user-attachments/assets/52afded5-677c-4ea2-961f-7febcd31b95c)

   3. Membuat Class View Cell

       Class ArtikelTerkini dibuat dalam folder Cells untuk menangani logika pengambilan data artikel terbaru dari database. Fungsi tampil() dalam class ini memanggil ArtikelModel, menyortir data berdasarkan created_at, dan bisa difilter berdasarkan kategori. Data hasil query kemudian dikirim ke view khusus sebagai komponen terpisah.

      ![image](https://github.com/user-attachments/assets/217d273e-f245-486a-bdb6-92954f96234e)

  4.  Membuat View untuk View Cell

      View artikel_terkini.php di dalam folder components bertugas menampilkan daftar artikel terbaru yang diterima dari View Cell. Artikel ditampilkan dalam bentuk list dengan tautan ke detail dan tanggal publikasi. Jika tidak ada data, akan muncul pesan bahwa artikel belum tersedia. Komponen ini biasanya ditampilkan di sidebar atau bagian khusus pada halaman utama.

      ![image](https://github.com/user-attachments/assets/752f5b3f-f6b2-4698-a72a-77a3bf5061b7)

      ---
      **Pertanyaan dan Tugas**
      1. Perubahan field pada database dengan menambahkan tanggal agar dapat mengambil data artikel terbaru.
         
         ![image](https://github.com/user-attachments/assets/86d33ec7-8176-4c8b-b2ce-00549b733fdc)

      2. Improvisasi yang telah dilakukan:
         - Mengubah limit menjadi > 5, misal 8:
           
           ![image](https://github.com/user-attachments/assets/3385ea85-9a99-47b8-aff6-498440712209)

         - Modifikasi tampilan menjadi list-group Bootstrap:
           
           ![image](https://github.com/user-attachments/assets/5601e7a6-f908-4b5f-b0b6-328078c4763a)
        
      3. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

         View Layout berguna untuk:
         1. Membuat struktur HTML yang konsisten di seluruh halaman.
         2. Menghindari pengulangan kode, karena bagian seperti header, footer, dan sidebar cukup dibuat sekali di layout.
         3. Memudahkan pemeliharaan dan update tampilan secara global tanpa harus mengedit setiap file view satu per satu.
        

      5. Perbedaan antara View Cell dan View biasa:
         
         ![image](https://github.com/user-attachments/assets/0863cf30-3ceb-47e2-8734-cc97cf751390)

      6. Mengubah View Cell agar hanya menampilkan post dengan kategori tertentu. Contoh (Kategori: Berita Olahraga)
         
         ![image](https://github.com/user-attachments/assets/21fceaaf-9291-49f9-a006-a3de4bbc97ee)

         Tampilan pada halaman menunjukkan fitur detail artikel yang berhasil diakses melalui URL berdasarkan slug, yaitu saat artikel berjudul *"Timnas Indonesia Menang Telak di Kualifikasi"* diklik.
      
         ![image](https://github.com/user-attachments/assets/c4afc9e5-d5ea-42dd-91cb-264802c7d711)

 ## Praktikum 4: Framework Lanjutan (Modul Login)
 
     Membuat Tabel: User Login

<img width="960" alt="user" src="https://github.com/user-attachments/assets/862a1e29-c05b-4acd-8f11-ee4cb2640052" />

Gambar ini menunjukkan struktur tabel `user_login` yang saya buat di phpMyAdmin sebagai bagian dari pembuatan fitur login dengan CodeIgniter 4. Tabel ini terdiri dari empat kolom, yaitu `id` sebagai primary key dengan tipe data `int(11)` dan AUTO_INCREMENT, serta `username`, `useremail`, dan `userpassword` yang bertipe `varchar(200)` untuk menyimpan data pengguna. Tabel ini akan digunakan sebagai tempat penyimpanan data akun yang diperlukan dalam proses login. 


<img width="960" alt="usermodel" src="https://github.com/user-attachments/assets/d6642137-5475-41ba-9e18-5f00ad26b810" />

Gambar ini menampilkan kode `UserModel.php` yang berfungsi sebagai model untuk mengelola data dari tabel `user_login`. Properti yang digunakan antara lain `$table` untuk nama tabel, `$primaryKey` untuk kunci utama, `$useAutoIncrement` untuk mengatur ID otomatis, serta `$allowedFields` untuk mendefinisikan kolom yang boleh diisi atau dimodifikasi, yaitu `username`, `useremail`, dan `userpassword`. Model ini digunakan untuk menangani operasi database terkait login pengguna.

![image](https://github.com/user-attachments/assets/8aae2049-ab52-40cc-888b-1604c06e4c43)

Gambar ini menampilkan kode pada file `User.php` yang berfungsi sebagai controller untuk mengatur proses login dan logout pengguna. Fungsi `index()` digunakan untuk menampilkan daftar user dari tabel `user_login`, sedangkan fungsi `login()` menangani autentikasi dengan memeriksa input `email` dan `password`. Jika data cocok dengan yang ada di database (dengan validasi menggunakan `password_verify()`), maka data user disimpan ke dalam session dan pengguna diarahkan ke halaman `admin/artikel`. Jika tidak cocok, sistem menampilkan pesan error melalui `flashdata` dan mengarahkan kembali ke halaman login. Fungsi `logout()` digunakan untuk menghapus session aktif dan mengarahkan pengguna kembali ke halaman login.

![image](https://github.com/user-attachments/assets/c25b6002-4847-40ef-a905-b6f71e81e1e0)

Gambar ini menampilkan file `login.php` yang berada pada direktori `Views/user/`, yang berfungsi sebagai halaman tampilan form login. Form ini terdiri dari dua input utama yaitu untuk email dan password, yang masing-masing diberi label dan class agar sesuai dengan gaya tampilan Bootstrap. Selain itu, terdapat script untuk menampilkan pesan kesalahan (`flashdata`) jika login gagal, seperti email tidak terdaftar atau password salah. Form dikirim menggunakan metode POST dan akan diproses oleh controller `User.php` untuk validasi login. Tampilan ini menjadi antarmuka awal bagi pengguna sebelum mengakses halaman admin.

![image](https://github.com/user-attachments/assets/f39eacbe-9c7f-49ca-883f-78ed8a39ad11)

Gambar ini menampilkan file `UserSeeder.php` yang digunakan untuk mengisi data awal (dummy) ke dalam tabel `user_login`. File ini berada di direktori `app/Database/Seeds` dan berfungsi sebagai seeder dalam CodeIgniter 4. Fungsi `run()` dalam file ini memanggil model `UserModel` lalu menyisipkan satu record user dengan username `admin`, email `admin@email.com`, dan password yang sudah di-hash menggunakan `password_hash()` dengan algoritma default. Seeder ini membantu menyiapkan data user untuk keperluan pengujian modul login.

![image](https://github.com/user-attachments/assets/5c74cf27-8269-436b-b098-a6eb296e2902)

Gambar ini menampilkan tampilan halaman login yang diakses melalui URL `localhost:8080/user/login`. Form ini menyediakan dua input, yaitu untuk email dan password, serta satu tombol untuk mengirimkan data login. Tampilan form ini berasal dari file `login.php` yang sebelumnya ditampilkan dan merupakan bagian dari antarmuka pengguna untuk proses autentikasi. Jika email dan password yang dimasukkan sesuai dengan data di database, pengguna akan berhasil masuk ke sistem; jika tidak, akan ditampilkan pesan error. Tampilan ini menunjukkan bahwa sistem login sudah berjalan di browser secara lokal.

![image](https://github.com/user-attachments/assets/9faa7d09-ac51-46c6-8fef-d0855c3b9919)

Gambar ini menampilkan kode file `Auth.php` yang berada di direktori `app/Filters`, dan berfungsi sebagai filter untuk membatasi akses halaman hanya untuk pengguna yang sudah login. Fungsi `before()` akan mengecek apakah session `logged_in` sudah aktif. Jika belum, pengguna akan diarahkan otomatis ke halaman login (`/user/login`). Fungsi ini berguna untuk mengamankan halaman admin agar tidak bisa diakses tanpa autentikasi. Sedangkan fungsi `after()` masih kosong dan dapat digunakan jika ingin menambahkan aksi setelah request diproses. 

![image](https://github.com/user-attachments/assets/9a922c44-fbc9-4f41-88df-f8b1b85711d8)

Gambar ini menampilkan file `Filters.php` yang berada di direktori `app/Config`, yang digunakan untuk mendaftarkan alias filter dalam CodeIgniter 4. Pada bagian `public array $aliases`, terlihat bahwa filter `auth` telah ditambahkan dan diarahkan ke kelas `\App\Filters\Auth::class`. Dengan penambahan ini, filter `auth` bisa digunakan dengan mudah di pengaturan routing untuk membatasi akses halaman tertentu, seperti halaman admin, hanya untuk pengguna yang sudah login. Langkah ini merupakan bagian dari konfigurasi sistem proteksi akses menggunakan filter.

![image](https://github.com/user-attachments/assets/30333d96-d0bd-434d-ba8f-d9816a3f45cf)

Gambar ini menampilkan file `Routes.php` pada direktori `app/Config`, yang digunakan untuk mendefinisikan rute akses dalam aplikasi. Terlihat adanya penggunaan `group()` dengan filter `auth` untuk rute yang diawali dengan `/admin`. Ini berarti seluruh rute dalam grup tersebut, seperti `/admin/artikel`, `/admin/artikel/add`, `/admin/artikel/edit`, dan `/admin/artikel/delete`, hanya bisa diakses oleh pengguna yang sudah login. Penggunaan filter ini mengamankan halaman-halaman admin agar tidak bisa diakses secara langsung tanpa autentikasi.

![image](https://github.com/user-attachments/assets/b8d1f8f3-d612-43a3-abec-e387549be046)

Gambar ini menampilkan halaman admin yang muncul setelah pengguna berhasil login. Halaman ini menampilkan daftar artikel yang tersedia dalam sistem, lengkap dengan informasi seperti ID, judul artikel, status (misalnya "Draft"), serta tombol aksi untuk mengubah (Ubah) dan menghapus (Hapus) artikel. Di bagian atas juga terdapat menu navigasi untuk berpindah ke dashboard, melihat daftar artikel, atau menambahkan artikel baru. Tampilan ini menunjukkan bahwa sistem login dan proteksi akses menggunakan filter telah berhasil diterapkan, dan pengguna yang telah terautentikasi dapat mengakses dan mengelola konten dalam portal admin.

![image](https://github.com/user-attachments/assets/731b092b-7376-4350-8161-f950ecd5e985)

Gambar ini menampilkan halaman login dengan pesan error "Password salah." yang muncul setelah pengguna mencoba masuk dengan email yang benar namun password yang salah. Sistem berhasil memvalidasi input dan menampilkan pesan kesalahan menggunakan `flashdata`, menandakan bahwa proses autentikasi telah berjalan sesuai logika yang diterapkan dalam controller `User.php`. Halaman login tetap ditampilkan untuk memberi kesempatan kepada pengguna untuk mengulang input yang benar.

 ## Praktikum 5: Pagination dan Pencarian

1. Membuat Pagination
   
   ![image](https://github.com/user-attachments/assets/47a26ccc-414e-4596-b808-2a57ec4fff00)

    ![image](https://github.com/user-attachments/assets/58cf888e-d965-4513-ab11-0a3125bd5fed)

    Gambar ini menunjukkan implementasi pagination pada method `admin_index()` dalam controller `Artikel.php`. Pagination digunakan untuk membatasi jumlah data artikel yang ditampilkan, dalam hal ini sebanyak 10 data per halaman dengan menggunakan `$model->paginate(10)`. Data `pager` juga disertakan dalam array `$data` untuk menampilkan navigasi halaman di view. Pendekatan ini membuat tampilan daftar artikel lebih terstruktur dan efisien saat menangani jumlah data yang besar.

2. Membuat Pencarian

   ![image](https://github.com/user-attachments/assets/459a9e81-638d-4b65-9423-9095cf7edcb4)

   ![image](https://github.com/user-attachments/assets/52d2b8ea-a4f8-4bed-b226-2e57c5f85e1f)

   ![image](https://github.com/user-attachments/assets/92613af8-65b0-4670-8f70-f997ef4542ef)

   ![image](https://github.com/user-attachments/assets/3b1c28ef-0f46-4acd-9fc9-8a127b65d0cd)

   Penjelasan ini menggambarkan proses implementasi fitur pencarian artikel pada halaman admin. Method `admin_index()` dalam controller `Artikel.php` dimodifikasi untuk menangkap input pencarian melalui `$this->request->getVar('q')`, yang kemudian digunakan sebagai filter data artikel. Pada view `admin_index.php`, ditambahkan form pencarian menggunakan method `GET` dan input teks untuk menerima kata kunci. Data yang ditampilkan dalam tabel disesuaikan dengan hasil pencarian, dan pagination tetap berjalan dengan membawa parameter pencarian, sehingga hasil tetap relevan saat berpindah halaman. Fitur ini mempermudah admin dalam menemukan artikel tertentu secara efisien.

 ## Praktikum 6: Upload File Gambar

1. Upload Gambar pada Artikel
   
   ![image](https://github.com/user-attachments/assets/e4d9c682-a6c0-4205-85eb-66513cafd820)
   
   ![image](https://github.com/user-attachments/assets/a0e92bbf-94a9-44bd-94bc-8d15c3e6748c)

2. Ujicoba file upload dengan mengakses menu tambah artikel.

   ![image](https://github.com/user-attachments/assets/75b4bbce-f695-4c54-a64c-c01308d79f2b)

    Kode ini menunjukkan bahwa fitur tambah artikel dengan upload gambar telah berhasil diimplementasikan. Pada controller `Artikel.php`, method `add()` menangani validasi input judul, pengambilan file gambar dengan `$this->request->getFile('gambar')`, pengecekan validitas file, serta penyimpanannya ke folder `public/gambar`. Di view `form_add.php`, tag `<form>` telah menggunakan `enctype="multipart/form-data"` dan dilengkapi input `type="file"` dengan `name="gambar"` untuk mendukung proses upload. Saat mengakses URL `/admin/artikel/add`, form tampil lengkap dengan isian judul, isi, dan upload gambar. Ketika form dikirim, data artikel dan gambar disimpan ke database dan direktori secara otomatis, memungkinkan admin menambahkan artikel beserta gambarnya langsung dari halaman web.

 ## Praktikum 7: Relasi Tabel dan Query Builder

 1. Membuat Tabel Kategori
    
    Langkah pertama adalah membuat tabel kategori di database menggunakan perintah SQL. Tabel ini berfungsi untuk menyimpan data kategori artikel, yang terdiri dari kolom id_kategori, nama_kategori, dan slug_kategori. Tabel ini akan menjadi acuan untuk relasi one-to-many dengan tabel artikel.
    
    ![image](https://github.com/user-attachments/assets/e61d7103-3fba-4af4-b321-79da6658b410)

 2. Mengubah Tabel Artikel

      Setelah tabel kategori tersedia, tabel artikel dimodifikasi dengan menambahkan kolom id_kategori dan menetapkan foreign key yang mengarah ke kategori. Tujuan langkah ini adalah membangun relasi antar tabel agar setiap artikel terhubung dengan salah satu kategori.
    
    ![image](https://github.com/user-attachments/assets/f64d8c0f-4ae4-4fda-8f0d-d68da18423b0)
    
 3. Membuat Model Kategori
    
     Pada tahap ini, dibuat file model KategoriModel.php di direktori app/Models. Model ini digunakan untuk mengelola interaksi dengan tabel kategori, termasuk pengambilan dan penyimpanan data kategori melalui fitur Query Builder CodeIgniter.
    
    ![image](https://github.com/user-attachments/assets/fabbc041-a61c-4f58-a020-4a350ab0fab8)

 4. Memodifikasi Model Artikel
    
    Model ArtikelModel.php dimodifikasi dengan menambahkan method getArtikelDenganKategori() yang melakukan join antara tabel artikel dan kategori. Method ini memungkinkan pengambilan data artikel beserta nama kategorinya secara langsung.
    
    ![image](https://github.com/user-attachments/assets/8f32429b-b3ea-4158-9dcd-b6e63d966c3c)

 5. Memodifikasi Controller Artikel

      File controller Artikel.php kemudian diperbarui pada bagian method index() dan admin_index() untuk memanfaatkan relasi yang telah dibuat. Controller ini mengatur pengambilan data artikel dengan kategori serta menerapkan fitur pencarian dan filter berdasarkan kategori di halaman admin.

    ![image](https://github.com/user-attachments/assets/f3f44e6a-e53e-4cd9-a682-a9b630c33058)

    ![image](https://github.com/user-attachments/assets/a1fd0c69-9653-4e26-8139-646cbeea307e)

    ![image](https://github.com/user-attachments/assets/34da7b45-b965-41ad-8b40-2a8c503a3dd9)

    ![image](https://github.com/user-attachments/assets/63b508f0-a685-42c1-9355-49f7a251bba0)

    ![image](https://github.com/user-attachments/assets/ffb6f1b7-eb6e-48d2-864a-755750d7ce81)

 6. Memodifikasi View

     index.php
    
     View index.php disesuaikan untuk menampilkan daftar artikel beserta nama kategori masing-masing. Penyesuaian ini membuat halaman depan lebih informatif karena kategori artikel ditampilkan secara langsung.
     
     ![image](https://github.com/user-attachments/assets/6bd87413-57a1-4814-a6bf-e4a8ca5854a1)

     admin_index.php
    
     Halaman admin juga diperbarui dengan menampilkan kolom kategori pada tabel artikel. Selain itu, ditambahkan fitur pencarian dan dropdown filter kategori untuk memudahkan pengelolaan artikel berdasarkan kategori tertentu.
    
     ![image](https://github.com/user-attachments/assets/50171f52-279f-43e5-a56c-f7220259e2ab)

     ![image](https://github.com/user-attachments/assets/6a1ec5ac-2a27-4947-ae4f-f5c87ef742ec)

     ![image](https://github.com/user-attachments/assets/ab08225e-d080-4cb0-b34d-1c67718ac2e3)

     form_add.php
    
     Pada form penambahan artikel, ditambahkan dropdown untuk memilih kategori. Dengan fitur ini, setiap artikel yang ditambahkan dapat langsung dikategorikan ke dalam salah satu kategori yang tersedia.
    
     ![image](https://github.com/user-attachments/assets/e84d7bb6-9285-48f4-8574-517ae2dbe59f)

     ![image](https://github.com/user-attachments/assets/52e280bb-5696-41e8-a405-b2febd0228e5)

     form_edit.php
    
     Formulir edit artikel disesuaikan dengan menampilkan dropdown kategori yang secara otomatis memilih kategori yang sedang digunakan artikel tersebut. Ini memudahkan dalam proses pengeditan dan pengubahan kategori artikel.
    
     ![image](https://github.com/user-attachments/assets/d1270539-1c8f-43ae-b039-6b31b367a4dc)

     ![image](https://github.com/user-attachments/assets/93b81fec-f610-4000-ab26-6747c6b4c479)

 7. Testing 
    Melakukan uji coba untuk memastikan semua fungsi berjalan dengan baik:
     1. Menampilkan daftar artikel dengan nama kategori.
     
        ![image](https://github.com/user-attachments/assets/3bd4f1d8-6608-4aec-a411-c9981f0b961a)

        Halaman admin menampilkan daftar artikel lengkap dengan nama kategori masing-masing. Tersedia fitur pencarian berdasarkan judul artikel dan filter kategori untuk memudahkan pengelolaan data artikel.

     2. Menambah artikel baru dengan memilih kategori.

        ![image](https://github.com/user-attachments/assets/f55f5ae7-17c6-4e1c-ba1c-1fa3602ea56f)
   
        Form tambah artikel menyediakan kolom untuk mengisi judul, isi, dan dropdown kategori. Hal ini memungkinkan pengkategorian artikel secara langsung saat penambahan data baru.

        ![image](https://github.com/user-attachments/assets/6d8d90fc-05de-47b2-9721-3beb37a582a5)

        Artikel baru yang sudah dibuat langsung muncul di daftar artikel dengan kategori yang sudah dipilih sebelumnya, menandakan proses penyimpanan dan pengkategorian berhasil.

     3. Mengedit artikel dan mengubah kategorinya.

        ![image](https://github.com/user-attachments/assets/0e1c33bf-2d4c-4fa1-bdcd-e36f542fa435)
   
        Form edit artikel memungkinkan perubahan judul, isi, dan kategori artikel. Dropdown kategori otomatis menampilkan kategori saat ini sehingga perubahan kategori bisa dilakukan dengan mudah.

        ![image](https://github.com/user-attachments/assets/981dfb2b-194e-4a5e-8aac-01bc3813d74d)

        Setelah diedit, artikel muncul kembali di daftar dengan kategori yang telah diperbarui, menunjukkan fungsi edit berjalan dengan baik.
        
     4. Menghapus artikel.
        
        ![image](https://github.com/user-attachments/assets/0a9896fe-8c8a-4b38-bf59-3f5251319121)
   
        Fitur hapus artikel dilengkapi dengan dialog konfirmasi untuk mencegah penghapusan tidak disengaja. Setelah konfirmasi, artikel yang dipilih dihapus dari database.

        ![image](https://github.com/user-attachments/assets/4961ee1c-9747-4e43-94e5-6ce16e9121c6)

        Setelah artikel dihapus, daftar artikel otomatis diperbarui dan artikel yang dihapus tidak lagi muncul, menandakan proses penghapusan berhasil.


## Praktikum 8: AJAX

1. Menambahkan Pustaka jQuery.

   Pada tahap ini dilakukan penambahan file pustaka jQuery ke dalam folder public/assets/js sebagai syarat utama agar fungsi AJAX dapat digunakan untuk komunikasi asynchronous antara client dan server.
   
   ![image](https://github.com/user-attachments/assets/bf642241-ea59-4574-9b48-e57e4f59587a)

1. Membuat AJAX Controller

    Membuat controller khusus yang berisi fungsi-fungsi untuk menangani request AJAX seperti mengambil data artikel, menghapus, mengubah, dan menambah artikel dalam format JSON tanpa reload halaman.
   
   ![image](https://github.com/user-attachments/assets/09e8f891-895d-4ec8-b9d7-96bb68e9491f)

   ![image](https://github.com/user-attachments/assets/c544e811-8804-4055-87d9-1b6bde3b89e8)

3. Membuat View

   Membuat tampilan halaman web yang menampilkan tabel data artikel serta form modal untuk tambah dan ubah artikel. Pada view ini juga diterapkan script jQuery untuk mengambil dan menampilkan data secara dinamis menggunakan AJAX.
   
   ![image](https://github.com/user-attachments/assets/8a5f1ceb-5106-4d5d-a07b-15cad25ddd37)

   ![image](https://github.com/user-attachments/assets/b7484170-53ba-4853-aaf9-b9f4460fc56e)

   ![image](https://github.com/user-attachments/assets/9cde8629-6b0b-4a0f-85f0-a7d8194f874d)

4. Tambahan fungsi tambah dan ubah data

   Menambahkan fitur form interaktif untuk menambah dan mengubah data artikel menggunakan modal yang terhubung dengan controller AJAX, sehingga perubahan data dapat dilakukan secara real-time tanpa reload halaman.
   
   ![image](https://github.com/user-attachments/assets/b05d4083-ab1b-474a-afd9-275aee7643e0)

   ![image](https://github.com/user-attachments/assets/7468db5d-f760-4494-8d46-d21dcabb18fc)

6. improvisasi yang ditambahkan:

   - Toggle status langsung di tabel — memudahkan mengubah status artikel (draft/publish) tanpa buka form.

     ![image](https://github.com/user-attachments/assets/bbe70c8f-f302-480c-b7fa-5dcd189d4757)

   - Toast notification — memberi notifikasi aksi berhasil/gagal yang lebih user-friendly daripada alert biasa.

     ![image](https://github.com/user-attachments/assets/3663f850-9752-4c6c-bbb8-9f4e09cbcdd5)

   - Validasi form dengan Bootstrap — memastikan input wajib terisi sebelum submit.

     ![image](https://github.com/user-attachments/assets/4c441b10-237a-4522-984f-7d1ffdd98b4b)

   - CRUD pakai AJAX — seluruh operasi tanpa reload halaman sehingga pengalaman pengguna lebih lancar dan cepat.

## Praktikum 9: Implementasi AJAX Pagination dan Search

1. Modifikasi Controller Artikel
   
   Modifikasi yang dilakukan pada method `admin_index()` di controller `Artikel.php` adalah untuk mengembalikan data dalam format JSON ketika request yang diterima adalah AJAX. Pada awalnya, controller ini mengatur data artikel yang akan ditampilkan, termasuk kategori dan pencarian berdasarkan judul. Setelah itu, jika request yang diterima adalah AJAX, data artikel yang sudah diproses dikembalikan dalam format JSON menggunakan `return $this->response->setJSON($data)`. Jika bukan AJAX, data akan dikirim untuk ditampilkan di tampilan view biasa. Dalam implementasi ini, pagination juga diterapkan menggunakan method `paginate()`, dan data tersebut diteruskan dalam response untuk ditampilkan atau diproses lebih lanjut pada client-side, memastikan pengambilan data lebih dinamis dengan menggunakan AJAX.
   
   ![image](https://github.com/user-attachments/assets/c08bb8ac-cd10-4c33-b7c6-b05f93206b30)

2. Modifikasi View (admin_index.php)

   admin_index.php dimodifikasi untuk menggunakan jQuery dalam menangani tampilan artikel dan pagination. Pertama, kode yang sebelumnya menampilkan tabel artikel dan pagination secara langsung dihapus. Kemudian, elemen kosong seperti #article-container dan #pagination-container ditambahkan untuk menampilkan data artikel dan pagination yang diperoleh dari request AJAX. Selanjutnya, kode jQuery ditambahkan untuk melakukan request AJAX ketika pencarian atau perubahan kategori dilakukan. Dengan cara ini, artikel dan pagination akan diperbarui secara dinamis tanpa perlu me-refresh seluruh halaman.

   ![image](https://github.com/user-attachments/assets/da87aaa1-0fa3-4f6f-ac85-7c4cb620ec8b)


3. Tampilan indikator loading saat data sedang diambil dari server
   
   ![image](https://github.com/user-attachments/assets/6d075e5a-9fb6-4480-9071-105d07d96e5f)

4. Tampilan fitur sorting (mengurutkan artikel berdasarkan judul, dll.)

   ![image](https://github.com/user-attachments/assets/0c8a2370-6c89-4d24-a5a7-9204c80c97b8)

## Praktikum 10: API

1. Membuat REST Controller

   Pada praktikum ini, langkah pertama adalah membuat file REST Controller bernama `Post.php` di direktori `app\Controllers`, yang berisi lima method untuk menangani operasi dasar pada data artikel di database. Method `index()` digunakan untuk menampilkan semua data artikel, `create()` untuk menambahkan artikel baru, `show()` untuk menampilkan artikel berdasarkan ID tertentu, `update()` untuk mengubah data artikel yang sudah ada, dan `delete()` untuk menghapus artikel berdasarkan ID. Setiap method mengembalikan respon dalam format JSON, dengan status yang sesuai untuk operasi yang dilakukan, seperti berhasil ditambahkan, diubah, atau dihapus.

   ![image](https://github.com/user-attachments/assets/62bec8bf-a96c-4301-8386-497e8cb58344)

2. Membuat Routing REST API
   
   Selanjutnya yaitu menambahkan route untuk REST API di file `Routes.php` yang terletak di direktori `app\Config`. Kode `$routes->resource('post');` digunakan untuk mendefinisikan resource route yang mengarahkan ke controller `Post.php` yang sudah dibuat sebelumnya. Kemudian, untuk memeriksa route yang telah dibuat, perintah `php spark routes` digunakan di terminal untuk menampilkan daftar route yang ada. Hasil dari perintah ini akan menunjukkan berbagai metode HTTP (GET, POST, PATCH, DELETE) yang terkait dengan route `post`, seperti `GET` untuk menampilkan data artikel, `POST` untuk menambah artikel baru, dan seterusnya. 

   ![image](https://github.com/user-attachments/assets/e9f57c20-a350-42a0-a176-e829caba3bcc)

   ![image](https://github.com/user-attachments/assets/c7c74559-0720-4ea3-af4f-7286b99815da)

3. Testing REST API CodeIgniter

   **Menampilkan Semua Data**
   
   Postman digunakan untuk mengirimkan request GET ke endpoint http://localhost:8080/post. Ini bertujuan untuk menampilkan semua data artikel dari database melalui REST API yang sudah dibuat. Pengujian berhasil jika response yang diterima berupa seluruh data artikel dalam format JSON.
   
   ![image](https://github.com/user-attachments/assets/3e4e83da-766a-43b0-b9cd-746c076f3cb7)
   
   ![image](https://github.com/user-attachments/assets/d8cf8de2-8e17-4a5e-ae14-156ad5f9613c)

   **Menampilkan Data Spesifik**

   Request GET dengan ID artikel ditambahkan pada URL, misalnya http://localhost:8080/post/19, untuk menampilkan data artikel dengan ID 19. Jika data artikel ditemukan, maka informasi terkait artikel tersebut akan dikembalikan dalam format JSON.

   ![image](https://github.com/user-attachments/assets/51993727-fa7b-4d8b-84a5-55c7bce67b4d)

   **Mengubah Data**

    Menggunakan metode PUT untuk mengubah data artikel. URL diatur dengan menambahkan ID artikel yang ingin diubah, misalnya http://localhost:8080/post/19. Pada tab body, data yang ingin diubah (misalnya judul dan isi) dimasukkan dengan menggunakan format x-www-form-urlencoded. Pengujian berhasil jika response menunjukkan status 200 dengan pesan yang menyatakan bahwa data artikel berhasil diubah.

   ![image](https://github.com/user-attachments/assets/3877ecb0-5650-4d90-961f-f3beef851ef8)

   **Menambahkan Data**

   Metode POST digunakan untuk menambahkan data artikel baru ke dalam database. URL yang digunakan adalah http://localhost:8080/post, dan data artikel baru dimasukkan pada tab Body dengan format x-www-form-urlencoded. Pengujian berhasil jika response menunjukkan status 201 dan pesan sukses bahwa data artikel berhasil ditambahkan.

   ![image](https://github.com/user-attachments/assets/aa62890b-9a6b-4bcb-b062-2f846045a6a7)

   **Menghapus Data**

   Gambar berikut menunjukkan pengujian metode DELETE untuk menghapus data artikel tertentu. URL yang digunakan adalah http://localhost:8080/post/19, di mana artikel dengan ID 19 akan dihapus. Pengujian berhasil jika response menunjukkan status 200 dan pesan sukses bahwa data artikel berhasil dihapus.

   ![image](https://github.com/user-attachments/assets/799e9558-3e65-42c6-999a-c37ae1923786)



## Praktikum 11: VueJS

**1. Struktur Direktory**

   Pada langkah pertama, terlihat struktur proyek Vue.js. Di dalam index.html, file ini menyertakan dua script eksternal yaitu Vue.js dan Axios. Vue.js digunakan untuk mengelola data dan interaktivitas, sedangkan Axios digunakan untuk melakukan HTTP request ke API backend. Di bagian <body>, terdapat tombol "Tambah Data" yang memiliki event @click="tambah" yang berfungsi untuk menampilkan form modal untuk menambah artikel.

   ![image](https://github.com/user-attachments/assets/04d6cd8f-ff20-4aa2-8b43-06a2e5a9a173)

**2. Menampilkan data**

   **index.html**

   Pada code index.html berikut, terdapat form modal untuk input data artikel yang diaktifkan ketika tombol "Tambah Data" diklik. Form ini menggunakan Vue.js dengan v-if="showForm" untuk menampilkan atau menyembunyikan modal, serta mengikat data input melalui v-model="formData" untuk mengambil nilai dari inputan. Form ini berisi input untuk judul, isi, dan dropdown untuk status. Ketika form disubmit, data akan diproses oleh metode saveData() yang mencegah pengiriman form secara default dengan @submit.prevent="saveData".
   
   ![image](https://github.com/user-attachments/assets/de9015d6-60a8-4d96-b207-915192660b06)

   **app.js**

   Di dalam app.js, Vue.js mengelola data dan logika aplikasi. data() berfungsi untuk mendeklarasikan properti seperti artikel, formData, dan statusOptions. Metode loadData() menggunakan Axios untuk mengambil data artikel dari API backend dan menampilkannya di dalam tabel. Metode tambah() digunakan untuk membuka form modal dan mempersiapkan form untuk menambah artikel baru. Metode edit() digunakan untuk mengubah artikel yang sudah ada, sedangkan metode saveData() berfungsi untuk menyimpan data ke backend, baik untuk menambah atau memperbarui artikel, tergantung apakah artikel memiliki ID atau tidak.
   
   ![image](https://github.com/user-attachments/assets/e220a5a2-5411-4cf1-9e82-8733ce0a2a40)

   **style.css**

   Code style.css menunjukkan styling yang diterapkan pada elemen-elemen di halaman. CSS di dalam file style.css mengatur tampilan tabel, form, tombol, dan modal. Kelas #app mengatur lebar aplikasi, sedangkan #form-data mengatur lebar form. Styling untuk modal dan tombol juga didefinisikan di sini, misalnya #btn-tambah untuk tombol tambah data yang memiliki warna latar belakang biru, dan modal diatur untuk tampil di tengah layar dengan latar belakang transparan.

   ![image](https://github.com/user-attachments/assets/7d72d816-54db-4797-9b52-788adf08a703)

**3. Hasil Output**

   Hasil Output menunjukkan aplikasi berjalan di browser dan menampilkan daftar artikel dalam bentuk tabel. Di sini, artikel yang ditampilkan adalah data yang diambil dari API menggunakan Axios. Tabel menampilkan kolom ID, Judul, Status, dan Aksi (Edit dan Hapus). Pengguna dapat mengedit atau menghapus artikel dengan mengklik tombol yang sesuai, yang memicu metode edit() atau hapus() di Vue.js.
   
   ![image](https://github.com/user-attachments/assets/ba228f53-60bb-4d21-85e5-fd037fdd3aab)


 









