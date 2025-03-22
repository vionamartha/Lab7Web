# Praktikum Pemrograman Web 2 (Praktikum 1-3)

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




