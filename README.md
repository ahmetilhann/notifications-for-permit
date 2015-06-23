# notifications-for-permit
1 Mayıs 2015'te yürürlüğe giren ELEKTRONİK TİCARETİN DÜZENLENMESİ HAKKINDAKİ kanunun gereğince kullanıcılara izinsiz bildirim göndermek yasaklandı.
Bu uygulama [Bulutfon] müşterileri için kişilerin bildirim alma isteklerini liste halinde database' e kaydeder. Daha sonra database deki listeleri istediğimiz gibi kullanabiliriz.

# Uygulama Nasıl Çalışır?
Uygulama bir [BFXM] uygulmasıdır. Numara sahibi [BFXM]' e yönlendirilmiş [Bulutfon] numaralarından birini arar. Otomatik yönlendirmeler devreye girer.
Kullanıcıdan bildirim almak istiyorsa 1'e istemiyorsa 2' ye basması istenir. Alınan veriler DB' ye numara, cevap ve tarih olarak yazılır.
Numara DB' ye önceden eklenmiş ise numaranın son aramada verdiği cevap alınır. Aynı numaranın birden fazla kayıt bırakması engellenmiş olunur.

# Uygulama Nasıl Kullanılır?
- Karşılama, kapanış, soru ve yanlış girdi de okunması gereken 4 ses dosyası seçilmelidir.
- Karşılama, kapanış, soru ve yalış girdi için seçtiğimiz ses dosyalarına sırasıyla "welcome", "closing", "decralation_question", "wrong_keying" isimleri verilmelidir.
- Ses dosyaları "sound" adındaki klasörün içerisine atılmalıdır.
- Kaynak sağlayacak online adress belirlenmeli ve dosya oraya yüklenmelidir.
- Sonra eklenen dosyanın adresi constants.php içerisinde 
```sh
$appUrl = "DOSYANIN ADRESİ";
```
  kısmına eklenmelidir.
- Veri tabanını verilen SQL kodlarıya MYSQL' de oluşturabilirsiniz.
- veri tabanı için oluşturduğunuz kullanıcı adı ve şifreyi constants.php içerisinde
```sh
$username = "KULLANICI ADI";
$password = "ŞİFRE";
```
kısımlarına eklenmelidir.
-Daha sonra bulutfon hesabınızdan [BFXM oluşturmalı] ve bir numaraya yönledirmelisiniz.

### Version
1.5.0

# MySQL Sorguları
DB oluşturmak

```sh
CREATE DATABASE notifications;
```
Table oluşturmak
```sh
CREATE TABLE notification_for_permit
(
  number VARCHAR(15),
  answer INT(2),
  date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE (number)
);
```
License
----

The MIT License (MIT)

Copyright (c) 2015 Ahmet Aydoðdu

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

[Bulutfon]:https://www.bulutfon.com/
[BFXM]:https://github.com/bulutfon/documents/tree/master/BFXM
[BFXM oluşturmalı]:https://www.youtube.com/watch?v=4DeFu8JvG3o

