<html>
<head>
<title>Вот это график - как это сделано?</title>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<meta name=viewport content="width=600">
<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body bgcolor="white" background="fon.jpg">



<table width="640" class="main" align="center">
<tr><td align="center">
    <img src="logo.gif" alt="Лого британских учёных"><br><br>
    <i>Британские учёные выяснили - как это сделано?</i><hr>  
</td></tr>
<tr><td align="left">
        <p><font size="2">
        Раз вы на этой странице, значит вам наверняка интересно, как же работает этот раздел.<br><br>
        А работает он просто - мной была написана программа-парсер новостных сайтов, и составлена база из 2000 слов. <br><br>
        <b>Алгоритм прост:</b><br>
        0. Составляем фразы по выражению "1. Что? 2.Чего? 3.Каких? 4.Кого? 5.Где? ".
        1. Слова, отвечающие на вопрос "чего" обычно следуют после слов "что", которые были прописаны вручную. <br>
        2. "Каких" имеют окончания -их, -ых, -ся, после фразы можно взять короткие предлоги и слово после.<br>
        3. "Кого" имеют окончания -ов,  -ек, -ей, и обычно идут после "каких".<br>
        4. "Где" всегда идут одним словом после слова "в".<br>
        Таким образом, был составлен простой парсер на Delphi, которому был скормлен один из новостных сайтов.<br>
        Итого сформировано 5 баз, из которых скрипт и берёт значения. А вы - наслаждаетесь!
        </font>

        </p><a href="index.php"><- Назад<br><br>

</div>
</td></tr>
</table>
<p>
<center>(c) <a href="http://lionovsky.us">Lionovsky, 2020</a></center>
</p>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47424376 = new Ya.Metrika2({
                    id:47424376,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47424376" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
