<!DOCTYPE html>
<!--
NAME: Morrolinux.it Website
AUTHOR: Riccardo Carissimi
-->

<html lang="it">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="favicon.ico" />

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.min.css" rel="stylesheet">

  <!-- <meta name="description" content=""> -->

  <title>Morrolinux.it</title>
</head>

<body id="page-top">

  <?php
    $essentials = $e101 = $e102 = $networking101 = "";

    if (file_exists('udemy_coupons.json')){
      $show_promo = true;
    } else {
      $show_promo = false;
    }
  ?>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top header-hide" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger font-weight-light" href="#home"><img src="img/logo.svg" width="35px" height="35px" alt="Logo" /><p>Morrolinux</p></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#corsi">Corsi</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#progetti">Progetti</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#sostieni">Sostieni</a>
          </li>

          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- #HOME -->
  <section id="home">
    <div class="container mt-5">
      <div class="row align-items-center">
        <div class="yt_video w-100">
		<iframe src="https://www.youtube-nocookie.com/embed/videoseries?list=UUnDDucQDLncrauOCmanCIgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<br /><br />
        </div>
        <?php if($show_promo){ ?>
          <a class="js-scroll-trigger banner" href="#corsi"><div> Offerta a tempo limitato! Tutti i corsi in <b>offerta speciale</b> al 93% di sconto <br><img src="img/right-arrow.svg"/> Clicca qui <img src="img/left-arrow.svg"/></div></a>
        <?php } ?>
      </div>

    </div>
  </section>

  <div class="container">
    <div class="divider"></div>
  </div>

  <!-- #CORSI -->
  <section id="corsi">
    <div class="container">
      <h2 class="my-5 text-center">CORSI</h2>
      <p class="mb-5 text-center">
      Pubblico video su Informatica e GNU/Linux dal 2008.
      Nel corso di questi anni ho realizzato svariati tutorial e numerosi video didattici. <br>
      Da alcuni anni a questa parte ho anche iniziato a realizzare corsi completi e ben strutturati. Ecco alcuni esempi:
      </p>
      <!-- <p class="mb-5 text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames.
      </p> -->
      <div class="card-deck">
        <a class="invisible-link" href="https://corsolinux.com/">
          <div class="card">
            <img src="img/corso-linux.jpg" class="card-img-top" alt="Copertina corso Linux" title="Copertina corso Linux">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Linux</h3>
              <p class="card-text">
                Qualunque sia il tuo livello di partenza e il tuo obiettivo, qui troverai il corso che fa per te.
                <br />Imparerai tutto ciò che c'è da sapere su <i>GNU/Linux</i> ed il suo ecosistema, tramite <b>spiegazioni chiare</b> ed esempi concreti di utilizzo.
                <br />Pronto per iniziare?
              </p><br>
              <a title="Corso linux" href="https://corsolinux.com/" class="btn btn-primary mt-auto">Confronta</a>
            </div>
          </div>
        </a>
        <a class="invisible-link" href="https://corsoreti.it/">
          <div class="card">
            <img src="img/corso-networking.jpg" class="card-img-top" alt="Copertina corso networking" title="Copertina corso networking">
            <div class="card-body d-flex flex-column">
              <h3 class="card-title">Networking</h3>
              <p class="card-text">
                Che tu sia un appassionato o uno studente alle prese con <b>reti di calcolatori</b>, sei nel posto giusto per imparare!
                <br />Ho ideato questo corso per guidarti in una panoramica sul mondo del Networking senza tralasciare, ove necessario, importanti cenni sulla <b>sicurezza informatica</b> troppo spesso "ignorati" nei corsi base di Networking.
  	          </p><br>
              <a title="Corso networking" href="https://corsoreti.it/" class="btn btn-primary mt-auto">Vai al corso</a>
            </div>
          </div>
        </a>
      </div>

    </div>
  </section>

  <div class="container">
    <div class="divider"></div>
  </div>

  <!-- #PROGETTI -->
  <section id="progetti">
    <div class="container">
      <h2 class="my-5 text-center">PROGETTI OPEN SOURCE</h2>
      <!-- <p class="mb-5 text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames.
      </p> -->

      <div class="row">

        <div class="col-md-6 col-lg-4">
          <a class="invisible-link" href="https://github.com/morrolinux/mpradio" target="_blank">
            <div class="project">
              <img src="img/fluid/radio.svg" alt="img">
              <h4>Mpradio</h4>
              <p>Trasforma il tuo Raspberry Pi in una emittente radio FM in grado di trasmettere musica dallo smartphone via Bluetooth!</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="invisible-link" href="https://docs.google.com/document/d/1m786WYmgYN5IQB2kkHipPjVVUkgzzNLGPNZ3tmmeon4/edit" target="_blank">
            <div class="project">
              <img src="img/fluid/vpn.svg" alt="img">
              <h4>Airvpn + torrent</h4>
              <p>Costruiamo un torrentbox dove scaricare torrent in anonimato tramite un servizio VPN ed un Raspberry Pi!</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4">
          <a class="invisible-link" href="https://docs.google.com/document/d/1vE-WSasdyKFwnLX1sT7bu4qXD4XalMyeOSEYIZw30Rg/edit" target="_blank">
            <div class="project">
              <img src="img/fluid/cctv.svg" alt="img">
              <h4>Sorveglianza con Raspberry Pi</h4>
              <p>Creiamo un sistema di sorveglianza minimale con motion detection su un Raspberry Pi</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-6">
          <a class="invisible-link" href="https://www.youtube.com/watch?v=H9IvFkqy-rc&list=PL4L8OWDC99_dK0kkfVB0dvsVYV3Iz7qMQ" target="_blank">
            <div class="project">
              <img src="img/fluid/distributed.svg" alt="img">
              <h4>Olive distributed</h4>
              <p>Olive è un video editor Open Source per GNU/Linux. Ho realizzato una render farm per l'esportazione distribuita dei video.</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-6">
          <a class="invisible-link" href="https://www.youtube.com/watch?v=K1szAL6MKWc" target="_blank">
            <div class="project">
              <img src="img/fluid/remote.svg" alt="img">
              <h4>PIRemote</h4>
              <p>Sostituiamo tutti i telecomandi a infrarossi (IR) con un singolo Raspberry Pi controllato da Google Assistant</p>
            </div>
          </a>
        </div>

      </div>

      <p class="mb-5 text-center">
	       Vedi tutti i progetti sul mio <a href="https://github.com/morrolinux?tab=repositories">profilo GitHub</a>
      </p>

    </div>
  </section>

  <div class="container">
    <div class="divider"></div>
  </div>


  <!-- #CONTRIBUZIONI -->
  <section id="contribuzioni">
    <div class="container">
      <h2 class="my-5 text-center">CONTRIBUZIONI A PROGETTI OPEN SOURCE</h2>
      <!-- <p class="mb-5 text-justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et netus et malesuada fames.
      </p> -->

      <div class="row">

        <div class="col-md-6 col-lg-6">
          <a class="invisible-link" href="https://www.youtube.com/watch?v=3MRYf2OKddc" target="_blank">
            <div class="project">
              <img src="img/fluid/clapperboard.svg" alt="img">
              <h4>Taglio automatico dei silenzi</h4>
              <p>Tramite questa contribuzione ad Olive video editor, è ora possibile tagliare automaticamente i silenzi in una traccia.</p>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-6">
          <a class="invisible-link" href="https://www.youtube.com/watch?v=BB8LFZtSc1g" target="_blank">
            <div class="project">
              <img src="img/fluid/writing.svg" alt="img">
              <h4>Appunti riascoltabili</h4>
              <p>5 novembre 2018: Pubblicato il primo prototipo della celebre funzionalità di OneNote ora integrata nel software GPL Xournal++</p>
            </div>
          </a>
        </div>

      </div>

    </div>
  </section>

  <div class="container">
    <div class="divider"></div>
  </div>

  <!-- #SOSTIENI -->
  <section id="sostieni">
    <div class="container">
      <h2 class="my-5 text-center">SOSTIENI</h2>
      <p class="mb-5 text-center">
        "Morrolinux" è un progetto di <strong>divulgazione informatica libera</strong>, incentrata su soluzioni OpenSource e sicurezza.<br />
          Per mantenere il progetto attivo e la divulgazione dei contenuti gratuita, servono aiuti e fondi.<br />
          Anche il sito “morrolinux.it” ha un costo mensile di affitto e manutenzione, per rimanere stabile, <strong>sicuro</strong> e veloce.
          Per offrire questi servizi, di cui tu stesso, proprio in questo momento stai usufruendo, ci affidiamo a soluzioni non sempre tradizionali.<br />
          Ecco alcuni modi con cui puoi <strong>realmente</strong> contribuire al progetto
      </p>

      <div class="row">

        <div class="col-lg-3">
          <div class="text-column">
            <img src="img/fluid/youtube.svg" alt="img">
            <h4>Su YouTube</h4>
            <p>
              - Iscrivendoti al canale<br />
              - Disattivando eventuali <strong>AdBlock</strong> sul mio canale<br />
              - Lasciando like e/o commenti ai video<br />
              - Condividendo il canale e i video<br />
            </p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="text-column">
            <img src="img/fluid/amazon.svg" alt="img">
            <h4>Su Amazon</h4>
            <p>
          		Accedendo al sito tramite il mio link: <a href="http://amzn.to/2AC0a6Q" target="_blank">http://amzn.to/2AC0a6Q</a><br />
          		- Amazon mi devolverà il 5% del suo ricavato sulla tua spesa<br />
          		- Zero costi aggiuntivi per te<br />
          		- Totale sicurezza negli acquisti e tutela della tua privacy<br /><br />
          		Per sapere di più: <a href="https://programma-affiliazione.amazon.it" target="_blank">programma di affiliazione Amazon</a><br />
        	  </p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="text-column">
            <img src="img/fluid/share.svg" alt="img">
            <h4>Sui social</h4>
            <p>
              - Mipiacciandomi su <a href="https://www.facebook.com/MorrolinuxOfficial/" target="blank_">Facebook</a><br />
              - Seguendomi su <a href="https://twitter.com/morrolinux" target="blank_">Twitter</a><br />
              - Stellandomi su <a href="https://github.com/morrolinux" target="blank_">GitHub</a><br />
            </p>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="text-column">
            <img src="img/fluid/donation.svg" alt="img">
            <h4>Donazioni</h4>
            <p>
              Anche se i video sono visibili gratuitamente, la loro realizzazione ha dei costi, sia economici che in termini di tempo.<br />Se ti va di contribuire ad ammortizzarli e credi anche tu nell'<strong>informazione libera</strong>, puoi fare una donazione qui. <b>Grazie.</b>
            </p>
            <a title="Sostieni" href="https://paypal.me/MorenoRazzoli" class="btn btn-primary mt-auto" target="_blank">Sostieni</a>
          </div>
        </div>

      </div>

    </div>
  </section>

  <div class="container">
    <div class="divider"></div>
  </div>

  <!-- #ABOUT -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-center my-5">ABOUT ME<br>
            <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-official mx-2" aria-hidden="true" style="color:#3c5a99;"></i></a>
            <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true" style="color:#00acee;"></i></a>
            <a href="https://telegram.me/morrolinux_feed" target="_blank"><i class="fa fa-comment mx-2" aria-hidden="true" style="color:#0088cc;"></i></a>
          </h2>
          <img class="avatar float-left rounded-circle mr-4" src="img/moreno.jpg" alt="Moreno Razzoli" title="Moreno Razzoli">
          <p>
            Mi chiamo <b>Moreno Razzoli</b>,<br>
        	  Nella vita sono un Linux System Administrator sempre alla ricerca di nuove tecnologie,
		        ho conseguito le certificazioni LPI, CompTIA Linux+ e Suse CLA, e sono attivo nell'ambito
		        GNU/Linux dal 2008 con i miei corsi e tutorial su <a href="https://www.youtube.com/user/morrolinux/">YouTube</a> e sul
		        mio <a href="https://morrolinux.it"> sito ufficiale.</a><br><br>
            La divulgazione informatica di qualità è per me una priorità, assieme ad un continuo lavoro
		        di ricerca per le opportunità del settore.
          </p>
          <!-- <p>
          Effettivamente non avevo mai pensato a quanto potesse essere imbarazzante scriversi la propria pagina di “Chi sono”.<br /><br />
          Ebbene mi chiamo Moreno Razzoli, ho studiato Computer Science (Informatica) e sono appassionato di GNU/Linux e soluzioni Open Source, di cui parlo spesso sul mio canale YouTube
          anche se non mi piace definirmi “uno youtuber“: tutto ciò che faccio è condividere reciprocamente entusiasmo e scoperte con una comunità (sempre in crescita!)
          di appassionati e professionisti del settore.<br />
          Nella vita sono un System Administrator sempre alla ricerca di nuovi stimoli, ragione per la quale ho conseguito la certificazione LPI assieme ad un continuo lavoro di ricerca delle nuove tecnologie ed opportunità del settore.
          </p> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container footer">
      <p class="m-0 text-center text-white">
        Made with ❤️ by <a href="https://github.com/mrriky54" target="_blank">Riccardo Carissimi</a><br><br>
        <a href="https://github.com/morrolinuxyt/m3" target="_blank"><i class="fa fa-github-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.facebook.com/MorrolinuxOfficial/" target="_blank"><i class="fa fa-facebook-square mx-2" aria-hidden="true"></i></a>
        <a href="https://twitter.com/morrolinux/" target="_blank"><i class="fa fa-twitter-square mx-2" aria-hidden="true"></i></a>
        <a href="https://www.youtube.com/user/morrolinux/" target="_blank"><i class="fa fa-youtube-square mx-2" aria-hidden="true"></i></a>
      </p>

    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>

  <!-- Custom JavaScript -->
  <script src="js/script.js"></script>


</body>

</html>
