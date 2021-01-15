# yii2-note

Bu modül not tutulması amacıyla yapılmıştır.Bu amaç doğrultusunda tablo üzerinde bazı işlemler gerçekleştirebilirsiniz.<br/>
![unutma](https://user-images.githubusercontent.com/49278142/104763518-13cf2780-5777-11eb-91fe-521fc2aded32.gif) <br/>

Modül üzerinde gerçekleştirebildiğiniz işlemler:<br/>
- Not oluşturabilirsiniz.<br/>
- Oluşturduğunuz notu düzenleyebilirsiniz.<br/>
- Oluşturduğunuz notu silebilirsiniz.<br/>
- Sildiğiniz notları çöp kutusu üzerinde tekrar görüntüleyebilirsiniz.<br/>
- Anasayfada tablonun üst kısmından başlığa veya not içeriğine göre arama yapabilirsiniz.<br/>
## Kurulum

1) ssh ile vagrant sanal makinesine bağlanınız.Ardından /var/www/advanced dizinine gidiniz. <br/>
`composer require --prefer-dist sevkikaragol/yii2-note "dev-main"` komutu ile modül kurulumunu yapınız. <br/>

2) Yii projeninizin altında backend\config\main.php dosyasında aşağıdaki düzenlemeyi yapınız.<br/> 
```
 'modules' => [
        'note' =>[
            'class' => 'sevkikaragol\note\Module'
          
        ]

    ],
}
```
3) ssh ile proje dizinine giderek modülde kullanılan tabloların kurulması için aşağıdaki komut ile migration işlemini gerçekleştiriniz. <br/>
`php yii migrate/up --migrationPath=@vendor/sevkikaragol/yii2-note/src/migrations`<br/>

Migration işlemini de tamamladıktan sonra modülü kullanabilirsiniz.

http://advanced/backend/web/index.php?r=note/not/index adresinden modül anasayfasına ulaşabilirsiniz.<br/>
## Modül Detayları

### Migrations:
Modül içerisinde 2 adet tablo vardır.Tablolardan biri oluşturulan notları diğeri ise silinen notları tutmaktadır.Değişkenleri aynıdır.<br/>
![tablo](https://user-images.githubusercontent.com/49278142/104766230-48dd7900-577b-11eb-94f8-0b952f3ab7ff.png) <br/>

### Gii üzerinde yapılan işlemler:
-Her tablo için modeller oluşturulmuştur.<br/>
-Tablolar üzerinde create,read,update,delete işlemleri yapabilmek için oluşturduğumuz modeller üzerinde CRUD Generator kullanılmıştır.Bu sayede tablolar üzerinde bahsedilen işlemler yapılabilir hale gelmiştir.Controller ve Views dosyaları oluşturulmuştur.<br/>

Gii üzerinde yapılan işlemlerin ardından NotController içerisinde silinen notların çöp kutusuna gönderilmesini sağlayan eklemeler ve düzenlemeler yapılmıştır.Yapılan bu işlemlerin ardından modülün diğer kısımlarında da modülün görselliğinde ve kullanıcıya sunduğu işlevlerde değişikliklik yapmak için gii üzerinde oluşturulan yapılar 
üzerinde değişiklikler yapılmıştır.<br/>

## Modülden Görseller
![anasayfa](https://user-images.githubusercontent.com/49278142/104767060-a0301900-577c-11eb-8bbd-cbba6cb7b5d7.png) 
![copKutusu](https://user-images.githubusercontent.com/49278142/104767090-ade59e80-577c-11eb-91fe-56d53aad8259.png)

