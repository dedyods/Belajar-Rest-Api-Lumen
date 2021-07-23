# Belajar-Rest-Api-Lumen
Belajar Rest Api menggunakan Lumen:
1.  Lakukan instalasi Lumen dengan perintah :composer create-project --prefer-dist laravel/lumen blog
    Note : untuk menjalankan server dengan perintah : php -S localhost:8000 -t public
2.  Lakukan instalasi Flipbox lumen generator : composer require flipbox/lumen-generator
    Note :  
    A. setelah berhasil instalasi flipbox lumen generator tambahkan kode program berikut pada file bootstrap/app.php :  
       $app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
    B. Untuk referensi instalasi flipbox lumen generator:https://github.com/flipboxstudio/lumen-generator
    
 
