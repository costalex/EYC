<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EYC - Debate</title>
        <meta name="description" content="A grand vision for Europe by 150 representatives of youth organisations from 38 countries. Visit now for first results.">
        <meta property="og:description" content="A grand vision for Europe by 150 representatives of youth organisations from 38 countries. Visit now for first results."/>
        <meta name="keywords" content="union citizens constitution european youth convention strasbourg convention européenne de la jeunesse Europäischer Jugendkonvent">        <meta property="title" content="European Youth Convention Designed Citizens Constitution." />
        <meta property="title" content=" European Youth Convention Designed Citizens Constitution." />
        <meta property="og:title" content=" European Youth Convention Designed Citizens Constitution." />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://www.youthconvention.eu/images/european-youth-convention-results.png" />
        <meta property="og:url" content="http://www.youthconvention.eu/"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet"  type="text/css">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
        <link href="bootstrap.min.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    </head>

    <body>
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>


      <div class="bg-nav"></div>

      <div class="page-wrap">

        <header>
          <?php include 'menu.php'; ?>
        </header>

          <?php include 'responsive-menu.php'; ?>

          <img style="width:100%" src="images/banner/European-Youth-Convention-Debate-the-Citizen-Constitution-header.jpg" alt="European Youth Convention debate the Citizen Constitution">

          <!--<div class="live-video">
            <h1>EYC Ambassadors reflect on day 2 of the convention</h3>
            <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fjeunes.europeens%2Fvideos%2F10155070211542974%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
          </div>-->

          <script type="text/javascript">
          window.twttr = (function (d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
      t = window.twttr || {};
  if (d.getElementById(id)) return;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function (f) {
      t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));

twttr.ready(function (twttr) {
  twttr.events.bind("rendered", function (event) {
      var frameDoc = event.target.contentDocument;

      // initially hide retweets
      var hideRetweets = function () {
          var retweets = frameDoc.querySelectorAll('div.timeline-Tweet--isRetweet');
          retweets.forEach(function (node) {
              if (node.parentNode && node.parentNode.style !== 'display: none;') { // (in)sanity check
                  node.parentNode.style = 'display: none;' // hide entire parent li tag
              }
          });
      };

      hideRetweets();

      // Twitter widget emitts no events on updates so we hook up ourselves to ol element to listen on it for additions of children
      var watcher = new MutationObserver(function (mutations) {
          // check whether new tweets arrived
          var hasNewTweets = mutations.some(function (mutation) {
              return mutation.addedNodes.length > 0;
          });
          if (hasNewTweets) {
              hideRetweets(); // rescan all tweets as it is easier
          }
      });
      watcher.observe(frameDoc.querySelector('ol.timeline-TweetList'), { childList: true });
  });
});
  </script>

          <!--<div class="opening-ceremony">
              <p>Please find here the English transcription of the European Youth Convention opening ceremony speech</p>
              <a href="european-youth-convention-opening-speech-celine-geissmann.php" target="_blank"><button type="button" name="button">Read the EYC opening ceremony speech</button></a>
          </div>-->

          <div class="container-fluid feeds">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <h3 class="live-title">Engage in drafting the EU-Constitution on Twitter</h3>
                <a class="twitter-timeline"
                  href="https://twitter.com/hashtag/FixEU"
                  data-widget-id="838867667347963904"
                  data-width="400"
                  data-height="600">
                  #FixEU Tweets
                </a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              </div>

              <div class="col-xs-12 col-sm-6">
                <h3 class="live-title">Debate here with your Facebook account</h3>
                  <div class="fb-comments" data-href="http://www.youthconvention.eu/debate.php" data-width="400" data-numposts="10"></div>
              </div>
            </div>
          </div>



          <div class="container-fluid media-article">
            <div class="row">
                <h3>Thursday 9 March - Opening day of the European Youth Convention - European Parliament Strasbourg</h3><br>
              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>They’re actually going to do it !</strong></h4><br>
                  <p><b>09/03/2017</b> - 150 young Europeans from 38 countries have gathered at the European Parliament to write a constitution</p>
                  <a href="they-are-actually-going-to-do-it.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>Sie ziehen es wirklich durch!</strong></h4><br>
                  <p><b>09/03/2017</b> - 150 Jugendvertreter wollen die Verfassung eines besseren Europas in vier Tagen schreiben.</p>
                  <a href="sie-ziehen-es-wirklich-durch.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>Ils vont vraiment le faire !</strong></h4><br>
                  <p><b>09/03/2017</b> - 150 citoyens en provenance de 38 pays se sont rassemblés au Parlement Européen pour donner une constitution à l'Europe.</p>
                  <a href="ils-vont-vraiment-le-faire.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid media-article">
            <div class="row">
                <h3>Friday 10 March - "Day 2 of the European Youth Convention"</h3><br>
              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>What's desirable, not what's affordable !</strong></h4><br>
                  <p><b>10/03/2017</b> - Day 2 of the European Youth Convention</p>
                  <a href="european-youth-convention-day-2.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>L'avenir dont vous rêvez, pas celui qu’on vous propose !</strong></h4><br>
                  <p><b>10/03/2017</b> - 2e jour de la Convention européenne de la Jeunesse</p>
                  <a href="european-youth-convention-jour-2.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>Konzentriert Euch auf Eure Wunschideen für Europa!</strong></h4><br>
                  <p><b>10/03/2017</b> - Tag zwei des Europäischen Jugendkonvents: Volle Denkkraft voraus!</p>
                  <a href="european-youth-convention-tag-2.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>
            </div>
          </div>

          <div class="container-fluid media-article">
            <div class="row">
                <h3>Saturday 11 March - "Day 3 of the European Youth Convention"</h3><br>
              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>A wave of new ideas for Europe!</strong></h4><br>
                  <p><b>11/03/2017</b> - Strasbourg, third day of work for the 150 participants of the European Youth Convention. Their objective : write a Constitution for Europe.</p>
                  <a href="european-youth-convention-day-3.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>Un torrent d’idées neuves pour l’Europe !</strong></h4><br>
                  <p><b>11/02/2017</b> - A Strasbourg, les 150 participants de la Convention européenne de la jeunesse entament leur troisième jour de travail. Leur objectif : écrire une Constitution pour l’Europe.</p>
                  <a href="european-youth-convention-jour-3.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="media-article-card">
                  <h4><strong>Konzentriert Euch auf Eure Wunschideen für Europa!</strong></h4><br>
                  <p><b>11/03/2017</b> - Tag drei des Europäischen Jugendkonvents in Straßburg: mehr als elf Stunden lang haben die 150 Teilnehmer am ersten Entwurf ihrer Verfassung für Europa gearbeitet.</p>
                  <a href="european-youth-convention-tag-3.php"><button type="button" name="button">Read more</button></a>
                </div>
              </div>
            </div>
          </div>

          <!-- GALLERY
          <div class="container-fluid live-gallery">
            <div class="row gallery-row-1">
              <div class="col-xs-6 col-sm-2">

              </div>
              <div class="col-xs-6 col-sm-2">

              </div>
              <div class="col-xs-6 col-sm-2">

              </div>
              <div class="col-xs-6 col-sm-2">

              </div>
              <div class="col-xs-6 col-sm-2">

              </div>
              <div class="col-xs-6 col-sm-2">

              </div>
            </div>
          </div>
          END GALLERY -->

          <div class="malik-provided">
            <h3>The European Youth Convention is powered by Malik Syntegration®</h3>
            <a href="http://www.malik-management.com/en" target="_blank"><img src="images/Malik-Institute.png" alt="Malik Institute logo"</a>
          </div>

          <div class="sponsors">
            <h3>The European Youth Convention is proudly supported by</h3>
              <a href="http://www.europarl.europa.eu/portal/en" target="_blank"><img src="images/ep-logo-fr.png" alt="European Parliament logo"></a>
              <a href="http://www.eppgroup.eu/" target="_blank"><img src="images/EPP-logo.jpg" alt="EPP Group logo"></a>
              <a href="http://www.gouvernement.fr/investissements-d-avenir-cgi" target="_blank"><img src="images/investissement-avenir.png" alt="Investissement d'avenir logo"></a>
              <a href="http://www.istitutospinelli.org/" target="_blank"><img src="images/instituto-spinelli-logo.png" alt="Instituto Spinelli logo" style="width:250px;"></a>
              <a href="http://www.strasbourg.eu/" target="_blank"><img src="images/strasbourg-europe.jpg" alt="Strasbourg.eu Euro Métropole logo"></a><br>
              <a href="http://www.unistra.fr/index.php?id=accueil" target="_blank"><img src="images/universite-strasbourg.png" alt="Université de Strasbourg logo" style="width: 140px;"></a>
              <a href="http://www.toepfer-stiftung.de/" target="_blank"><img src="images/Alfred-Toepfer-Stiftung-Logo.jpeg" alt="Alfred Toepfer Stiftung logo"></a>
              <a href="http://www.alsacechampagneardennelorraine.eu/" target="_blank"><img src="images/region-grand-est.jpg" alt="Région Grand-Est logo"></a>
              <a href="http://www.pde-edp.eu/" target="_blank"><img src="images/pde-edp-logo.jpg" alt="PDE EPD logo"></a>
              <a href="http://www.bas-rhin.fr/" target="_blank"><img src="images/logo-dep-bas-rhin.jpg" alt="Conseil Départemental Bas-Rhin logo"></a>
              <a href="http://www.crous-strasbourg.fr/" target="_blank"><img src="images/crous.png" alt="Crous Strasbourg logo" style="width: 140px;"></a><br>
              <a href="http://www.mouvement-europeen.eu/" target="_blank"><img src="images/mouvement-europeen-france-logo.png" alt="Mouvement Européen France logo"></a>
              <a href="http://www.lde.fr/" target="_blank"><img src="images/logo-rendre-simple.jpg" alt="LDE - rendre les choses simple logo"></a>
              <a href="http://www.reseau-gds.fr/" target="_blank"><img src="images/logo-Reseau-GDS.png" alt="Réseau GDS logo"></a>
              <a href="https://www.ofaj.org/" target="_blank"><img src="images/ofaj-dfjw.PNG" alt="OFAJ - DFJW logo"></a>
              <a href="http://www.youthforum.org/fr/" target="_blank"><img src="images/european-youth-forum-logo.jpg" alt="European Youth Forum logo"></a>
              <a href="http://fondationhippocrene.eu/" target="_blank"><img src="images/fondation-hippocrene-logo.jpg" alt="Fondation Hippocrene logo"></a>
              <a href="http://eelv.fr/" target="_blank"><img src="images/institut-jacques-delors-logo.jpg" alt="Institut Jacques Delors logo"></a>
              <a href="http://www.institutdelors.eu/" target="_blank"><img src="images/les-verts-ale-logo.png" alt="Les Verts | ALE logo"></a>
              <a href="http://www.socialistsanddemocrats.eu/" target="_blank"><img src="images/socialists-democrats-logo.gif" alt="Socialists and Democrats logo"></a>
          </div>

          <div class="euractiv-media">
            <h3>Euractiv is the Media Partner of the European Youth Convention</h3>
            <a href="http://www.euractiv.com/" target="_blank"><img src="images/euractiv-logo.png" alt="Euractiv logo"</a>
          </div>




    </div> <!-- END PAGE WRAP -->

        <?php include 'footer.php'; ?>


    </body>

</html>
