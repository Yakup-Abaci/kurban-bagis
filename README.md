# Kurban Bagis Sitesi
Online bir şekilde kurban bağışı yapacağınız siteye hoşgeldiniz.. İlk önce bilgilerinizi girip kayıt olmanız gerekmektedir. Daha sonra ise giriş yapıp bilgilere erişebilir ve bağışınızı yapabilirsiniz.

#Açılımı
İlk öncelikle Xampp'i açarak apache ve mysql kısımlarını başlatmanız gerekmektedir. Daha sonra Xampp'i kurmuş olduğunuz sürücüde Xampp dosya klasöründeki htdocs klasörüne gelerek içindeki tüm dosyaları silip yüklemiş olduğum tüm dosya ve resimleri oraya yükleyiniz.

#Mysql
web tarayıcınızda http://localhost:8080/phpmyadmin 'e gelerek database adını kullanıcılar , kaşılaştırmasını utf8_turkish_ci seçerek bir database oluşturun.
Bu databasenin SQL kısmına gelerek:
CREATE TABLE kurban(
adi varchar(255),
soyadi varchar(255),
telno TEXT,
eposta text,
bagisfiyati text,
bagisturu text,
gidecek_yer text
);
komutunu çalıştırın.

Bu komutu çalıştırdıktan sonra localhost http://localhost:8080 'e geldiğiniz zaman sizi direk başlangıç ekranına yönlendirecektir.

#Kayıt Ve Giriş
İstenilen bilgileri tam girdikten sonra giriş kısmına kayıt olurken girmiş olduğunuz ad ve sifrenizi girerek giriş yapabilirsiniz.

