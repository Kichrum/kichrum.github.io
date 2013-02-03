<?php 
  $minimized = "0-0-0-1-0-1";
  header('Content-type: text/html; charse=utf-8');
  if($_SERVER['QUERY_STRING'] == "reset")
  {
    setcookie("jdash-collapse-jDash", $minimized, time() + 3600*24*1000);
    setcookie("jdash-detect-cookies", "", time());
    setcookie("jdash-index-jDash", "", time());
    header("location: ./");
    exit();
  }
  if($_SERVER['QUERY_STRING'] == "stat")
  {
    setcookie("jdash-collapse-jDash", "1-1-0-1-0-1", time() + 3600*24*1000);
    header("location: ./");
    exit();
  }
  if(empty($_COOKIE["jdash-collapse-jDash"]))
    setcookie("jdash-collapse-jDash", $minimized, time() + 3600*24*1000);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <title>Домашняя страница Пашко Сергея aka Kichrum</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/jdashboard.css" />
    <link rel="stylesheet" href="css/rotatescroll.css" type="text/css" media="screen"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="http://kichrum.org.ua/favicon.ico" rel="shortcut icon" type="image/x-icon" />

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="js/jdashboard.min.js"></script>
    <script type="text/javascript">
        
        $(function() {
            $("#jDash").jDashboard({ columns: 3 });
        });
        
    </script>
    
    <script type="text/javascript" src="js/jquery.bgscroll.js"></script>
    <script type="text/javascript" language="javascript">
      $( function() {
      $('.clouds').bgscroll({scrollSpeed:100, direction:'h' });
      });
    </script>

    <!--[if lte IE 6]>
      <style type="text/css">
      /* Internet Explorer 6 PNG transparency fix */
      #rotatescroll .overlay { background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/bg-rotatescroll.png", sizingmethod='scale'); }
      #rotatescroll .thumb { background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/bg-thumb.png", sizingmethod='scale'); }
      </style>
    <![endif]-->
    
    <script type="text/javascript" src="js/jquery.tinycircleslider.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#rotatescroll').tinycircleslider({ interval: true, snaptodots: true, hidedots: false });
      });
    </script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20814005-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
  
  <body class="clouds">
    <div id="jDash">
      <div class="jdash-item">
        <h1 class="jdash-head">Домашняя страничка</h1>
        <div class="jdash-body">
          <h1 id="header"><a href="http://kichrum.sumy.ua/" title="Домашняя страница Пашко Сергея aka Kichrum"><span style="color: white; background: #006496;">Kichrum</span>'s Homepage</a><span id="c"><a href="#" onClick="setVisible();" style="text-decoration: none; color: #000000;">|</a></span> 
          <script type="text/javascript">setInterval(function() {var c = document.getElementById("c");
          c.style.visibility = c.style.visibility=="hidden"? "visible" : "hidden";
          }, 500);</script></h1>
          <p>Привет! Ты на домашней странице Пашко Сергея.</p>
          <p>Ты можешь посетить его, то есть мой, <a href="http://kichrum.org.ua" title="Kichrum's Blog">блог</a> и 
          <a href="http://twitter.com/Kichrum" title="Pashko Sergey on Twitter">микро-блог</a>, а также любой другой 
          проект, если какой-то еще знаешь.</p>
          <p>На старой версии сайта есть удобная <a href="/old/">пополнялка за WebMoney</a>. И тут что-то будет, возможно... Если есть идеи - <a href="http://kichrum.org.ua/about/contact" title="Обратная связь">пиши</a>.</p>
          <p align="center">&copy; <a href="http://kichrum.org.ua/about/contact" title="Обратная связь">Пашко Сергей</a>, 2010&mdash;<?=date("Y"); ?></p>
        </div>
      </div>
      
      <div class="jdash-item">
        <h1 class="jdash-head">Социальненько</h1>
        <div class="jdash-body" align="center">
          <div id="rotatescroll">
            <div class="viewport">
              <ul class="overview">
                <li><a href="http://kichrum.org.ua" title="Kichrum's Blog">[b]</a><p>Мой блог</p></li>
                <li><a href="http://twitter.com/Kichrum" title="Kichrum's Tweets">[t]</a><p>Мой микро-блог</p></li>
                <li><a href="http://kichrum.vkontakte.ru" title="Я В Контакте">[vk]</a><p>Моя страничка В Контакте</p></li>
                <li><a href="http://www.facebook.com/Kichrum" title="Я на FaceBook">[f]</a><p>Моя страничка в Facebook</p></li>
                <li><a href="http://kichrum.livejournal.com/" title="Я в Живом Журнале">[lj]</a><p>Я в Живом Журнале</p></li>
                <li><a href="http://kichrum.mp" title="Я в Chi.mp">[mp]</a><p>Я в Chi.mp</p></li>
                <li><a href="http://profiles.google.com/Kichrum" title="Я в Google">[g]</a><p>Мой профиль Google</p></li>
                <li><a href="http://friendfeed.com/kichrum" title="Моя лента активности в сети FriendFeed">[ff]</a><p>Моя лента в FriendFeed</p></li>
              </ul>
            </div>
            
            <div class="dot"></div>
            <div class="overlay"></div>
            <div class="thumb"></div>
          </div>
        </div>
      </div>
    
      <div class="jdash-item">
        <h1 class="jdash-head">Статистические данные</h1>
        <div class="jdash-body">
            <table align="center">
              <tr>
                <td><script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/Kichrum/000000/ffffff"></script></td>
                <td><!--LiveInternet counter--><script type="text/javascript">new Image().src = "http://counter.yadro.ru/hit?r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"" : ";s"+screen.width+"*"+screen.height+"*" + (screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u"+escape(document.URL) +  ";" +Math.random();</script><!--/LiveInternet-->
                <!--LiveInternet logo--><a href="http://kichrum.org.ua" target="_blank"><img src="http://counter.yadro.ru/logo?29.20" border="0" width="88" height="120" alt="Информер статистики посещений" title="LiveInternet: количество просмотров и посетителей для Kichrum.org.ua"/></a><!--/LiveInternet-->
                <br/><!-- cy-pr.com --><a href="http://kichrum.org.ua" target="_blank"><img src="http://www.cy-pr.com/e/kichrum.org.ua_3_107.138.206.gif" border="0" width="88" height="31" alt="Информер PR ТИЦ" title="cy-pr: показатели Kichrum.org.ua в поисковых системах" /></a><!-- / cy-pr.com --></td>
                <td><a href="http://rss.kichrum.org.ua/Kichrum"><img src="http://rss.kichrum.org.ua/~fc/kichrum?bg=ffffff&fg=000000&anim=1&label=Fans" height="26" width="88" style="border:0" alt="Информер читателей RSS" title="FeedBurner: количество читателей Kichrum.org.ua" /></a></td>
              </tr>
            </table>
        </div>
      </div>
    
      <div class="jdash-item">
        <h1 class="jdash-head">Новое в блоге</h1>
        <div class="jdash-body">
          <script src="http://rss.kichrum.org.ua/Kichrum?format=sigpro" type="text/javascript" ></script>
          <a href="http://kichrum.org.ua">ещё...</a>
        </div>
      </div>
      
      <div class="jdash-item" style="display:none;"></div>
      
      <div class="jdash-item">
        <h1 class="jdash-head">Новое в Twitter</h1>
        <div class="jdash-body">
          <script src="http://rss.kichrum.org.ua/Kichrum/twitter?format=sigpro" type="text/javascript"></script>
          <a href="http://twitter.com/Kichrum">ещё...</a>
        </div>
      </div>
      
    </div>
    <a href="?reset" class="reset-link" title="Вдруг настроил такое, что не знаешь, как всё восстановить. А они ведь в кукисах хранятся, да-да-да...">[сбросить расположение окошек]</a>
  </body>
</html>
