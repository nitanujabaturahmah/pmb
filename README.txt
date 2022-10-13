**Proses Sistem**

a. Proses Pendaftaran
-calon mahasiswa melakukan pendaftaran melalui menu daftar
-calon mahasiswa mengisi formulir pendaftaran sampai tuntas
-Data yang diinputkan akan masuk kedalam tabel akun, tb_camaba, tb_ortu, detail_pendaftaran
-User akan diinformasikan untuk melakukan login dengan email dan password untuk menyelesaikan pendaftaran
-User harus mengupload Formulir akte kalahiran, kartu keluarga, pas foto ukuran 4x6, scan ktp atau sk domisili, scan ijazah dan scan raport terakhir untuk menyelesaikan pendaftaran
-data upload akan masuk ke dalam tabel pendfataran
-Setelah upload berhasil, maka syarat pendaftaran lengkap
-tunggu konfirmasi dari admin
-admin mengkonfirmasi pendaftaran user
-status pendftaran user akan berubah menjadi 1 di table pendaftaran (Pendaftaran sudah dikonfirmasi oleh admin)
-Proses pendaftaran selesai, lanjut ke proses pembayaran.

b. Proses pembayaran Pendaftaran
-User melakukan melakukan pembayaran di menu pembayaran
-User klik metode pembayaran yang akan digunakan (Metode pembayaran tidak bisa berubah setelah dipilih)
-User Cetak Kwitasi yang harus dibayarkan (sesuai prodi, untuk biaya yg akan dibayarkan)
-User harus melakukan konfirmasi pembayaran di menu konfirmasi pembayaran dengan menyertakan bukti jika telah melakukan pembayaran
-Status Pendaftaran akan diubah jadi 2 (sudah melakukan konfirmasi)
-Admin akan melakukan konfirmasi atas konfirmasi pembayaran oleh user
-Status pendaftaran akan diubah jadi 3 (sudah melakukan konfiramsi pembayaran oleh user)
-Jika User sudah melunasi pembayaran, maka status akan diubah menjadi 4 (sudah lunas)




0 - baru daftar (blom selesai melengkapi administrasi didashboard seperti upload akter, dan foto)
1 - pendaftaran sudah dikonfirmasi oleh admin
2 - sudah melakukan konfirmarsi pembayaran oleh user
3 - admin sudah melakukan konfirmasi pembayaran oleh user
4 - user sudah melunasi pembayaran pendaftaran


*USER
exemple
email 		: 	nita07putri@gmail.com
password 	:	semangat


*ADMIN
email		: 	admin@gmail.com
password	:	abcde