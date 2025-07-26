<?php
include('../connect.php');

$collection = $m->HeartProject->Artikel;

if (isset($_GET['slug'])) {
    $slug = $_GET['slug'];

    $article = $collection->findOne(['file' => $slug]);

    if ($article) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
          <title><?php echo $article['judul'] ?> - Tatsumi Crew</title>
          <meta charset="utf-8">
          <meta name="robots" content="index,follow">
          <link rel="shortcut icon" href="/images/favicon.png">
          <meta name="google-site-verification" content="3GpANghhr8zUF55SKCmADFdAROk3Fr1i3Yp6Qe2S5uU" />
          <meta property="og:title" content="Tatsumi Crew - <?php echo $article['judul'] ?>" />
          <meta property="og:description" content="<?php echo $article['deskripsi'] ?>" />
          <meta property="og:image" content="https://tatsumi-crew.net/images/teknologi.jpg" />
          <meta property="og:url" content="https://tatsumi-crew.net" />
          <meta name="description" content="<?php echo $article['deskripsi'] ?>">
          <meta name="keywords" content="<?php echo $article['keyword'] ?>">
          <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-QpVZdrzyYY3J0KPQVQjM5WT9yHvR/5MD5w9m1BEGJpqUpu+O3q3g5Qb2zzbc9D5u" crossorigin="anonymous">
          <link rel="stylesheet" href="/css/style.css?<?php echo rand(11111, 99999); ?>">
          <link rel="stylesheet" href="/css/artikel.css?<?php echo rand(11111, 99999); ?>">
          <style>
            code {
              display: inline-block;
              background-color: #f7f7f7;
              border-radius: 4px;
              padding: 0.2em 0.4em;
              font-size: 90%;
              line-height: 1.45;
              font-family: "Fira Code", "Courier New", Courier, monospace;
              border: 1px solid #ddd;
          }
          #disqus_thread {
            max-width: 100%;
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <br>
    <?php include('../backend/menu.php'); ?>
    <div class="card">
        <div class="card-header"><?php echo $article['judul'] ?></div>
        <div class="card-body">
            <p><?php echo $article['tanggal']->toDateTime()->format('d M Y H:i:s') ?> Posted By: <a href="https://www.facebook.com/sh1raoka">Arvan Apriyana<a></p>
                <hr>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
                crossorigin="anonymous"></script>
                <!-- IKLAN_2 -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-3495133541569466"
                data-ad-slot="7921769118"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
                <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
                <p><?php echo $article['isi'] ?></p>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
                     crossorigin="anonymous"></script>
                <ins class="adsbygoogle"
                     style="display:block; text-align:center;"
                     data-ad-layout="in-article"
                     data-ad-format="fluid"
                     data-ad-client="ca-pub-3495133541569466"
                     data-ad-slot="7324110533"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <br />
        <div class="card">
            <div class="card-header">Advertisement</div>
            <div class="card-body">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
                crossorigin="anonymous"></script>
                <!-- IKLAN_FOOTER -->
                <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-3495133541569466"
                data-ad-slot="4866318211"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
                <script>
                   (adsbygoogle = window.adsbygoogle || []).push({});
               </script>
           </div>
       </div>
        <br>
        <div id="disqus_thread"></div>
        <script>
            (function() {
                var d = document, s = d.createElement('script');
                s.src = 'https://tatsumi-crew-1.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</div>
<center>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
     crossorigin="anonymous"></script>
<!-- IKLAN_9 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-3495133541569466"
     data-ad-slot="5387092775"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script></center>
<br>
<?php include('../backend/footer.php'); ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/script.js?<?php echo rand(11111, 99999); ?>"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
crossorigin="anonymous"></script>
<script id="dsq-count-scr" src="//tatsumi-crew-1.disqus.com/count.js" async></script>
<script>
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var resultDiv = document.getElementById("result-visitor");
      var resultObj = JSON.parse(this.responseText);
      resultDiv.innerHTML = "Visitor: " + resultObj.total;
    }
  };
  xhr.open("GET", "/native/visitor.php", true);
  xhr.send();
</script>

</body>
</html>
<?php
} else {
     // Jika artikel tidak ditemukan, kita bisa menampilkan halaman 404
 header("HTTP/1.0 404 Not Found");
 header('location: https://tatsumi-crew.net/404.html');
}
} else {
 // Jika tidak ada URL yang diberikan, kita bisa menampilkan halaman beranda atau halaman daftar artikel
 $articles = $collection->find([], ['sort' => ['tanggal' => -1]]);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Tatsumi Crew - List Article</title>
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="/images/favicon.png">
    <meta name="google-site-verification" content="VCwDHTfCGMJgn9egXj57bfjbdkW15a6_XU2fdW8Fi_Q" />
    <meta property="og:title" content="Tatsumi Crew - List Article" />
    <meta property="og:description" content="Tatsumi Crew - List Article" />
    <meta property="og:image" content="https://Tatsumi Crew.com/images/Tatsumi Crew.jpg" />
    <meta property="og:url" content="https://Tatsumi Crew.com" />
    <meta name="description" content="Tatsumi Crew - List Article">
    <meta name="keywords" content="Tatsumi Crew, reverse IP, subdomain scanner, whois lookup, OSINT, open-source intelligence,OSINT, open source intelligence, threat intelligence, social media monitoring, online investigations, digital forensics, cybersecurity intelligence, risk assessment, incident response, threat hunting, vulnerability assessment, network scanning, port scanning, DNS lookup, IP geolocation, email verification, domain reputation, SSL certificate, web application security, password cracking, hash identification, file analysis, malware analysis, cybercrime investigation, fraud detection, identity verification, people search, data mining">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-QpVZdrzyYY3J0KPQVQjM5WT9yHvR/5MD5w9m1BEGJpqUpu+O3q3g5Qb2zzbc9D5u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css?<?php echo rand(11111, 99999); ?>">
    <link rel="stylesheet" href="/css/artikel.css?<?php echo rand(11111, 99999); ?>">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        h1 {
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
        }
        .read-more-button {
            font-size: 0.8rem;
            padding: 0.2rem 0.5rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .article {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .article h2 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .article p {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .article a {
            text-decoration: none;
            color: #333;
        }

        .article a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Tatsumi Crew - List Article</h1>
    <div class="container">
        <div class="article">
            <?php foreach ($articles as $article): ?>
                <h2><a href="<?php echo $article['file'] ?>"><?php echo $article['judul'] ?></a></h2>
                <p><?php echo $article['keyword'] ?></p>
                <p><a href="/blog/<?php echo $article['file'] ?>" class="read-more-button btn btn-primary btn-sm">Read More</a></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
<?php
}
?>
