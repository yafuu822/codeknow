<!doctype html>
<html lang="ja">
<head>
    <title>@yield('title')|エンジニアの人生メモ</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="エンジニアのシステム開発関連の技術メモであると同時に、エンジニアになるための学習指針・独学ノウハウ、WEBサービスやアプリの紹介、生きてく上で必要になる可能性が高い制度や法律の紹介をしています。">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
　　<link rel="icon" type="image/x-icon" href="/favicon.ico">
    @yield('css')
</head>
<body>
  <div class="container">
@yield('search')
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-9">
          @yield('content')
          @yield('relatedArticle')
        </div>
        <div class="col-sm-3">
          @yield('sidebar')
      </div>
    </div>
  </div<
     

<!-- js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
    @yield('script')
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 広告ユニット1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1371289003554434"
     data-ad-slot="3792117343"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88793149-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
