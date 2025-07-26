<?php
error_log(0);
include('connect.php');

$collection = $m->HeartProject->Artikel;

if (isset($_GET['slug'])) {
  $slug = $_GET['slug'];

  $article = $collection->findOne(['file' => $slug]);

  if ($article) {
    ?>
    <?php
  } else {
   header("HTTP/1.0 404 Not Found");
   header('location: https://tatsumi-crew.net/404.html');
 }
} else {
 $articles = $collection->find([], ['sort' => ['tanggal' => -1]]);
 ?>
 <?php
$ip_address = $_SERVER['REMOTE_ADDR'];

$webhookURL = 'https://discord.com/api/webhooks/1136155352824561715/8Qaa7wqQQ4ZqeJ0kGfJj4vbTzLxRsOSYweWKtCiiEC8Pv1MvOixQALx7_nNdexZ8aY9n';

function sendDiscordMessage($url, $message) {
$post_fields = array(
'content' => $message,
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
}

$messageToSend = "```diff\n- ⭐ LOGS IP ⭐ -\n\n▶️ IPLOGS: $ip_address\n```";

sendDiscordMessage($webhookURL, $messageToSend);
?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Tatsumi Crew - Informasi & Teknologi</title>
  <meta charset="utf-8">
  <meta name="robots" content="index,follow">
  <link rel="shortcut icon" href="/images/favicon.png">
  <meta name="google-site-verification" content="3GpANghhr8zUF55SKCmADFdAROk3Fr1i3Yp6Qe2S5uU" />
  <meta name="description" content="Dapatkan informasi terbaru seputar programming, hacking, coding, dan teknologi di portal kami. Kami menyajikan berita terkini dan artikel tentang bahasa pemrograman, keamanan siber, pengembangan aplikasi, dan masih banyak lagi.">
  <meta name="keywords" content="programming, coding, hacking, teknologi, bahasa pemrograman, keamanan siber, pengembangan aplikasi, open-source, open-source intelligence, OSINT, threat intelligence, social media monitoring, investigasi online, forensik digital, keamanan siber, penilaian risiko, respons insiden, threat hunting, penilaian kerentanan, pemindaian jaringan, pemindaian port, DNS lookup, geolokasi IP, verifikasi email, reputasi domain, sertifikat SSL, keamanan aplikasi web, penguraian hash, analisis file, analisis malware, investigasi kejahatan siber, deteksi penipuan, verifikasi identitas, pencarian orang, penambangan data">
  <meta property="og:title" content="Tatsumi Crew - Informasi & Teknologi" />
  <meta property="og:description" content="Dapatkan informasi terbaru seputar programming, hacking, coding, dan teknologi di portal kami. Kami menyajikan berita terkini dan artikel tentang bahasa pemrograman, keamanan siber, pengembangan aplikasi, dan masih banyak lagi." />
  <meta property="og:image" content="https://tatsumi-crew.net/images/teknologi.jpg" />
  <meta property="og:url" content="https://tatsumi-crew.net" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-QpVZdrzyYY3J0KPQVQjM5WT9yHvR/5MD5w9m1BEGJpqUpu+O3q3g5Qb2zzbc9D5u" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css?<?php echo rand(11111, 99999); ?>">
  <link href="/css/adblock.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/artikel.css?<?php echo rand(11111, 99999); ?>">
  <style>
    .article {
      margin-top: 0;
      padding-top: 20px;
      border-top: none;
    }
    .read-more-button {
      background-color: #FFF;
      color: #4CAF50;
      border: 1px solid #4CAF50;
      padding: 0.5rem 1rem;
      border-radius: 0.25rem;
      font-size: 0.8rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .read-more-button:hover {
      background-color: #4CAF50;
      color: #FFF;
      border: 1px solid #4CAF50;
    }
    .article h2 {
      font-size: 24px;
      font-weight: bold;
      margin-top: 0;
      margin-bottom: 10px;
    }
    .article hr {
      border: none;
      border-top: 1px solid #ccc;
      margin: 10px 0;
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
    /* Tombol halaman */
    .page-button {
      background-color: #fff;
      border: 1px solid #ccc;
      color: #333;
      padding: 5px 10px;
      margin: 0 5px;
      cursor: pointer;
    }
    .page-button:hover,
    .page-button.active {
      background-color: #333;
      color: #fff;
    }

    /* Tombol sebelumnya dan berikutnya */
    .prev-button,
    .next-button {
      background-color: #fff;
      border: 1px solid #ccc;
      color: #333;
      padding: 5px 10px;
      margin: 0 5px;
      cursor: pointer;
    }

    .prev-button:hover,
    .next-button:hover {
      background-color: #333;
      color: #fff;
    }

    .prev-button[disabled],
    .next-button[disabled] {
      background-color: #ccc;
      color: #fff;
      cursor: not-allowed;
    }
    @keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}}
    @keyframes rubberBand{from{transform:scale3d(1,1,1);}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1);}50%{transform:scale3d(1.15,0.85,1);}65%{transform:scale3d(.95,1.05,1);}75%{transform:scale3d(1.05,.95,1);}to{transform:scale3d(1,1,1);}}
    #dewablock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;}
    #dewablock .header{margin:0 0 15px 0;}
    #dewablock .inner{background:#e3482d;color:#fff;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:40px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 1s;}
    #dewablock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#fff;margin:20px 5px;cursor:pointer;transition:all .3s;}
    #dewablock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;}
    #dewablock button.active,#dewablock button:hover.active{background:#fff;color:#222;outline:none;}
    #dewablock .fixblock{background:#fff;text-align:left;color:#000;padding:20px;height:250px;overflow:auto;line-height:30px;}
    #dewablock .fixblock div{display:none;}
    #dewablock .fixblock div.active{display:block;}
    #dewablock ol{margin-left:20px;}
    @media(max-width:768px){#dewablock .inner{width:calc(100% - 20px);margin:10px auto;padding:15px;}}
  </style>
</head>
<body>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div>
  <br>
  <?php include('backend/menu.php'); ?>
  <div class="card">
    <div class="card-header">News </div>
    <div class="card-body">
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
           crossorigin="anonymous"></script>
      <ins class="adsbygoogle"
           style="display:block; text-align:center;"
           data-ad-layout="in-article"
           data-ad-format="fluid"
           data-ad-client="ca-pub-3495133541569466"
           data-ad-slot="3193293832"></ins>
      <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <?php $i = 0; foreach ($articles as $article): ?>
      <div class="article <?php echo ($i >= 5) ? 'hidden' : ''; ?>">
        <h2><a href="/blog/<?php echo $article['file'] ?>"><?php echo $article['judul'] ?></a></h2>
        <p><?php echo $article['deskripsi'] ?></p>
        <p><a href="/blog/<?php echo $article['file'] ?>" class="read-more-button btn btn-primary btn-sm">Read More</a></p>
        <hr>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
             crossorigin="anonymous"></script>
        <ins class="adsbygoogle"
             style="display:block; text-align:center;"
             data-ad-layout="in-article"
             data-ad-format="fluid"
             data-ad-client="ca-pub-3495133541569466"
             data-ad-slot="3001722148"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
      <?php $i++; endforeach; ?>
      
      <?php if (count($articles) > 5): ?>
        <div class="show-more">
          <button class="show-more-button">Tampilkan lebih banyak</button>
        </div>
      <?php endif; ?>
      <br>
      <div class="pagination">
        <button class="prev-button">&laquo; Sebelumnya</button>
        <?php for ($j = 1; $j <= ceil(count($articles) / 5); $j++): ?>

          <button class="page-button <?php echo ($j === 1) ? 'active' : ''; ?>"><?php echo $j; ?></button>
        <?php endfor; ?>
        <button class="next-button">Berikutnya &raquo;</button>
      </div>
      
      <!-- IKLAN_10 -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
           crossorigin="anonymous"></script>
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-3495133541569466"
           data-ad-slot="7013135255"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <!-- IKLAN_10_LAST -->
<br>
    </div>
  </div>
</div>
</div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-3495133541569466"
     data-ad-slot="4148716501"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php include('backend/footer.php'); ?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="/js/script.js?<?php echo rand(11111, 99999); ?>"></script>
<script src="/js/page.js?<?php echo rand(11111, 99999); ?>"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3495133541569466"
crossorigin="anonymous"></script>
<script type='text/javascript'>
function downloadJSAtOnload(){var e=document.createElement("script");e.src="https://cdn.jsdelivr.net/gh/dewaplokis/block@master/dewablock.js",document.body.appendChild(e)}window.addEventListener?window.addEventListener("load",downloadJSAtOnload,!1):window.attachEvent?window.attachEvent("onload",downloadJSAtOnload):window.onload=downloadJSAtOnload;
</script>
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
}
?>
