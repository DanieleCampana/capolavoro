<?php
include 'data.php';
include 'session.php';
include '../database/database.php';

$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : 'Arial';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Reti neurali biologiche</title>
	<link rel="stylesheet" href="../styles/sidebar.css">
	<link rel="stylesheet" href="../styles/main.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body id="body" style="font-family:  <?php echo "$font"; ?>" onload="openNav()">
    <?php
	/*if (isset($_SESSION['id'])) {
	} else {
		header("Location: index.php");
	}*/
	?>

<div id="mySidebar" class="sidebar">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
	<li><a href="home.php">Home</a></li>
    <li><a href="rna.php" >Reti neurali artificiali</a></li>
    <li><a href="rnb.php" style="background-color:#555">Reti neurali biologiche</a></li>
	<li><a href="differences.php">Differenze tra reti neurali</a></li>
	<li><a href="apps.php">Applicazioni</a></li>
	<li><a class="openinx" onclick="openNav2()">☰ Indice</a></li> 
</div>

<div id="myRightbar" class="rightbar">
	<a href="javascript:void(0)" class="closeinx" onclick="closeNav2()">←</a>
	<li><a href="#introduzione">Introduzione</a></li>
	<li><a href="#neuroni">Neuroni</a></li>
	<li><a href="#anatomia">Anatomia</a></li>
	<li><a href="#impulsi">Impulsi Elettrici</a></li>
	<li><a href="#neurotrasmettitori">Neurotrasmettitori</a></li>
	<li><a href="#alcuniNeurotrasmettitori">Alcuni neurotrasmettitori</a></li>
	<li><a href="#plasticita">Plasticita' Cerebrale</a></li>
	<li><a href="#specchio">Neuroni a Specchio</a></li>
	<li><a href="#sistema">Sistema Nervoso</a></li>
	<li><a href="#centrale">Sistema Nervoso Centrale</a></li>
	<li><a href="#periferico">Sistema Nervoso Periferico</a></li>
	<li><a href="#autonomo">Sistema Nervoso Autonomo</a></li>
	<li><a href="#somatico">Sistema Nervoso Somatico</a></li>
	<li><a href="#utilita">A Cosa Serve Il Sistema Nervoso?</a></li>
</div>

<div id="main">
  <button class="openbtn" id="menu" onclick="openNav()">☰ Menu'</button>  

  <section id = "introduzione" >
	<div class="container <?php echo "$theme"; ?>">
		<h2>Introduzione</h2>
		<p>In questa pagina tratteremo sia delle <b>reti neurali biologiche</b> che del 
			sistema nervoso. Il termine "rete neurale" nel contesto della biologia
			e delle neuroscienze si riferisce a un insieme di <b>neuroni</b>. Le reti 
			neurali sono identificate come gruppi di neuroni che svolgono una specifica
			funzione fisiologica nelle analisi di laboratorio. Esse sono costituite 
			da un certo numero di neuroni che interagiscono tra loro attraverso
			<b>connessioni sinaptiche</b>. Le reti neurali biologiche, anche se 
			semplificate drasticamente, hanno ispirato nel campo dell'informatica
			le cosiddette <b>reti neurali artificiali</b>.</p>
	</div>
  </section>
  <section id = "neuroni">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Neuroni</h2>
		<p>Il tessuto nervoso è composto da neuroni, cellule della neuroglia e tessuto 
			vascolare, i quali insieme costituiscono il <b>sistema nervoso</b>. 
			I neuroni possiedono peculiarità fisiologiche e chimiche che consentono
			 loro di ricevere, elaborare e trasmettere <b>segnali nervosi</b>, sia stimolanti
			  che inibitori, e sono in grado di produrre neurosecreti.</p>
	</div>
  </section>
  <section id = "anatomia">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Anatomia</h2>
		<p>Il neurone è costituito da diverse parti. Il <b>nucleo</b> si trova nel corpo 
			cellulare o <b>soma</b>, insieme ad altri organelli come l'apparato di Golgi,
			 neurofilamenti e neurotubuli. La <b>zolla di Nissl</b>, una regione del soma,
			  facilita l'identificazione del neurone. Dall'interno del soma si 
			 estendono prolungamenti citoplasmatici chiamati <b>neuriti</b>, tra cui <b>dendriti</b>
			  e assone. I dendriti ricevono segnali da altri neuroni e li conducono 
			  verso il soma, mentre l'assone trasmette segnali in direzione 
			  opposta. Rivestito da strati di <b>mielina</b>, l'assone, a differenza dei
			dendriti che tendono ad assottigliarsi e a diminuire il segnale, è
			  un efficace conduttore di segnali nervosi. Inoltre nell'assone di alcuni
			   tipi neuronali può avvenire la <b>sintesi proteica di neurotrasmettitori</b>,
			    proteine cargo e mitocondriali. L’assone termina con il <b>bottone sinaptico</b>,
				 che facilita il contatto con altre cellule neuronali.
				Oltre ai neuroni, il tessuto nervoso comprende le cellule gliali, più numerose, che
				 forniscono supporto e contribuiscono all'integrità strutturale e funzionale del
				sistema nervoso. Negli assoni del sistema nervoso periferico, la <b>guaina di Schwann</b>
				 e la guaina mielinica isolano l'assone per impedire la dispersione degli impulsi
				 elettrici. La membrana più esterna prende il nome di neurolemma o guaina di Schwann,
				quella più interna di guaina mielinica. Lungo il neurolemma si trovano i nodi
				di Ranvier, dove la mielina è assente, che consentono una rapida conduzione degli
				impulsi.
				Alcuni neuroni del sistema nervoso simpatico possono non presentare la guaina mielinica, 
				mentre altri possono mancare del neurolemma, come nel caso del nervo ottico.
				Ecco un'immagine completa di una cellula neuronale:
		</p>
				
		<img src="../images/neurone.png" alt="Immagine di un neurone">
	</div>
  </section>
  <section id = "impulsi">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Impulsi elettrici</h2>
		<p>La struttura segmentata della guaina mielinica consente agli impulsi 
			elettrici di <b>"saltare"</b> da un nodo di Ranvier all'altro, facilitando
			una trasmissione più veloce da neurone a neurone. Questo fenomeno 
			è noto come <b>conduzione saltatoria</b>, mentre quando l'impulso si propaga
			lungo tutta la fibra si parla di <b>conduzione puntiforme</b>, tipica
			dei nervi periferici come quelli degli arti. Gli impulsi elettrici,
			chiamati anche <b>spike</b>, sono generati attraverso un processo di
			<b>polarizzazione e depolarizzazione</b> della membrana neurale, che 
			avviene in modo ondulatorio. Queste onde polarizzatrici e depolarizzatrici
			si succedono lungo le fibre neuronali.
			Il sistema garantisce la trasmissione degli impulsi elettrici lungo
			l'assone con una velocità di circa <b>150 m/s</b>. La frequenza di scarica 
			o di innervazione del neurone è definita come il numero di spike 
			al secondo <b>(Fi = spike/s)</b>.
		</p>
	</div>
  </section>
  <section id = "neurotrasmettitori">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Neurotrasmettitori</h2>
		<p>In biologia, un neurotrasmettitore, noto anche come </b>"neuromediatore"</b>, 
			è una sostanza responsabile della trasmissione delle 
			informazioni tra neuroni attraverso la <b>sinapsi</b>. All'interno 
			del neurone, i neurotrasmettitori sono immagazzinati 
			in vescicole chiamate <b>vescicole sinaptiche</b>, che si trovano 
			nelle estremità distali dell'assone nei punti in cui questo 
			entra in contatto sinaptico con altri neuroni.
		Quando il neurone riceve uno <b>stimolo</b>, le vescicole sinaptiche 
		si fondono con la membrana <b>pre-sinaptica</b> mediante esocitosi, rilasciando 
		il loro contenuto nello spazio sinaptico o fessura 
		inter-sinaptica. I neurotrasmettitori liberati si legano quindi 
		a <b>recettori</b> o canali ionici presenti sulla membrana <b>post-sinaptica</b> 
		del neurone ricevente. Questa interazione tra neurotrasmettitore 
		e recettore/canale ionico provoca una risposta <b>eccitatoria</b> 
		o inibitoria nel neurone post-sinaptico.
		</p>
	</div>
  </section>
  <section id = "alcuniNeurotrasmettitori">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Alcuni neurotrasmettitori</h2>
		<li>acetilcolina: molecola organica contenente azoto, ha un importante ruolo nell'encefalo e nelle sinapsi di collegamento tra neuroni motori e cellule muscolari, può avere funzione eccitante nel sistema nervoso centrale, tramite la contrazione dei muscoli scheletrici, o funzione inibitoria nel sistema nervoso parasimpatico, tramite il rallentamento del battito cardiaco</li>
		<li>ammine biogene: molecole derivanti dagli amminoacidi, comprendono sostanze che agiscono anche come ormoni:</li>
		<li>adrenalina (eccitante);</li>
		<li>noradrenalina (eccitante);</li>
		<li>serotonina;</li>
		<li>dopamina (eccitante);</li>
		<li>adenosina (calmante, provoca sonnolenza);</li>
		<li>amminoacidi:</li>
		<li>acido aspartico (eccitante)</li>
		<li>acido glutammico (eccitante)</li>
		<li>glicina (inibitore)</li>
		<li>acido gamma-amminobutirrico (inibitore)</li>
		<li>peptidi:</li>
		<li>sostanza P (eccitante, media la percezione del dolore);</li>
		<li>endorfine (diminuiscono il dolore nei momenti di stress);</li>
		<li>monossido di azoto.</li>
		<p>Esempio struttura dopamina:</p>
		<img src="../images/dopamina.jpg" alt="Struttura dopamina">
	</div>
  </section>
  <section id = "plasticita">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Plasticita' cerebrale</h2>
		<p>La <b>plasticità cerebrale</b> è la capacità del sistema nervoso di <b>modificare</b> 
			la propria struttura e funzionalità in risposta all'<b>attività 
			neuronale</b>, agli stimoli esterni, alle lesioni e allo sviluppo 
			individuale. Le cellule nervose, in ambienti ricchi di <b>esperienze</b>
			 o durante il processo di <b>apprendimento</b>, aumentano la loro attività 
			 e formano più sinapsi, determinando variazioni fisiche nel cervello. 
			 Questa plasticità consente al cervello di adattarsi e cambiare 
			 in risposta agli stimoli, migliorando le <b>connessioni neuronali</b> 
			 e le <b>capacità cognitive</b>.
		</p>
	</div>
  </section>
  <section id = "specchio">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Neuroni a specchio</h2>
		<p><b>I neuroni a specchio</b> , scoperti per la prima volta negli anni '90 dal
			 professor Giacomo Rizzolatti e dal suo team presso l'Università di
			  Parma, rappresentano una particolare tipologia di neuroni. Studi 
			   successivi hanno evidenziato che questi neuroni consentono la <b>manifestazione</b> 
			   di ciò che potremmo definire <b>empatia</b>  nelle scienze umane: 
			   un atteggiamento di<b> comprensione </b> verso gli altri, escludendo
			    sentimenti affettivi personali come simpatia o antipatia, e giudizi 
				morali.
			Essi permettono di <b>immedesimarsi negli stati d'animo</b>  e nei pensieri
			 altrui, basandosi sulla comprensione dei loro segnali emozionali, l
			 'assunzione della loro prospettiva soggettiva e la condivisione dei
			  loro sentimenti. A livello neurobiologico, partecipare come <b>osservatori 
			  ad azioni</b> , sensazioni ed emozioni altrui <b>attiva le stesse aree
			   cerebrali</b>  coinvolte quando svolgiamo tali azioni o percepiamo quel
			   le sensazioni ed emozioni in prima persona.
			Questo significa che l'empatia è un tratto innato della specie umana,
			 non derivante da uno sforzo intellettuale ma piuttosto da un<b> processo
			  di "simulazione incarnata"</b> . Si tratta di un meccanismo motorio essenziale, 
			  molto antico in termini di evoluzione umana, che coinvolge neuroni 
			  agendo immediatamente prima di qualsiasi elaborazione cognitiva
			più complessa. Questi neuroni spiegano anche la capacità umana di <b>relazionarsi 
			con gli altri</b> : osservando un'azione, si attivano nel nostro 
			cervello gli stessi neuroni che verrebbero coinvolti se fossimo
			    noi stessi a compierla, facilitandoci così la <b>comprensione delle azioni altrui</b> .

			Il riconoscimento delle emozioni si basa sul <b>meccanismo a specchio</b> , 
			come dimostrato sperimentalmente. Quando osserviamo negli altri una manifestazione 
			di dolore o qualsiasi altra emozione, nel nostro cervello si
			attiva lo stesso stato neuronale associato alla percezione in prima 
			persona di quella specifica emozione.
			Questa scoperta scientifica assume particolare rilevanza in una società 
			sempre più globalizzata e complessa da interpretare.
		</p>
	</div>
  </section>
  <section id = "sistema">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Sistema Nervoso</h2>
		<p>Il sistema nervoso è composto dal<b> cervello, dal midollo spinale, 
			dagli organi di senso e da tutti i nervi </b>che permettono la comunicazione 
			tra questi organi e il resto del corpo. È suddivisibile in
			<b>due parti principali</b>: il sistema nervoso centrale e il sistema 
			 nervoso periferico, ognuna delle quali ha diverse componenti specializzate 
			 con funzioni specifiche.
		</p>
	</div>
  </section>
  <section id = "centrale">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Sistema Nervoso Centrale</h2>
		<p>Il sistema nervoso centrale è costituito dal cervello e dal midollo 
			spinale. Il <b>cervello</b>, situato all'interno della scatola cranica, 
			contiene circa <b>cento miliardi di cellule nervose</b> chiamate neuroni,
			 oltre a una quantità maggiore di cellule di supporto note come glia.
			  È diviso in <b>due emisferi</b> che sono collegati tra loro e continua
			   direttamente con il<b> midollo spinale</b>, una struttura cilindrica 
			   situata all'interno della colonna vertebrale. Entrambi sono protetti
			    da membrane chiamate <b>meningi</b> e circondati dal <b>liquido cerebrospinale</b>
				 prodotto dal cervello. Da queste due strutture si diramano <b>nervi</b>
				  che si estendono verso altre parti del corpo.
		</p>
	</div>
  </section>
  <section id = "periferico">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Sistema Nervoso Periferico</h2>
		<p>Il sistema nervoso periferico è suddiviso in <b>due parti principali</b>:
			 il sistema nervoso <b>autonomo</b> e il sistema nervoso <b>somatico</b>.
		</p>
	</div>
  </section>
  <section id = "autonomo">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Sistema Nervoso Autonomo</h2>
		<p>Il sistema nervoso autonomo è ulteriormente suddiviso in sistema nervoso
		<b>simpatico</b>, sistema nervoso <b>parasimpatico</b> e sistema nervoso <b>enterico</b>.
			  È costituito da neuroni il cui corpo si trova nel cervello o nel 
			  midollo spinale e i cui prolungamenti, chiamati <b>fibre nervose pregangliari</b>,
			   si estendono verso dei gangli, dove entrano in contatto con altri neuroni.
			    I prolungamenti di questi ultimi, chiamati <b>fibre nervose postgangliari</b>,
				 si dirigono poi verso gli organi con cui il sistema nervoso centrale deve comunicare.
		</p>
	</div>
  </section>
  <section id = "somatico">
  <div class="container <?php echo "$theme"; ?>">
		<h2>Sistema Nervoso Somatico</h2>
		<p>Nel sistema nervoso somatico, invece, singoli neuroni collegano direttamente il sistema
			 nervoso centrale agli <b>organi</b>. Questi neuroni possono essere di due tipi: i <b>neuroni
			  sensitivi</b>, che trasportano informazioni dalla pelle e dagli organi di senso al
			   sistema nervoso centrale, e i <b>motoneuroni</b>, che inviano segnali ai muscoli
			    scheletrici per il movimento volontario.
		</p>
	</div>
  </section>
  <section id = "utilita">
  <div class="container <?php echo "$theme"; ?>">
		<h2>A Cosa Serve Il Sistema?</h2>
		<p>Il sistema nervoso permette la <b>comunicazione</b> tra le diverse parti del corpo e 
		<b>coordina</b> sia le funzioni volontarie che involontarie. Il cervello e il midollo
			 spinale integrano le informazioni provenienti dal corpo e dall'ambiente esterno
			  per <b>pianificare reazioni adeguate</b>. Il midollo spinale raccoglie le 
			  informazioni dirette al cervello e le trasmette al resto del corpo,
			   oltre a controllare i riflessi muscolari semplici.

			Il sistema nervoso periferico, invece, si occupa di <b>portare informazioni
			 sensoriali</b> al cervello, di <b>controllare i muscoli</b> trasmettendo loro segnali 
			 dal cervello e di connettere gli organi interni al sistema nervoso centrale.
			  Il sistema nervoso autonomo regola le funzioni <b>automatiche </b>del corpo, come 
			  la digestione e la respirazione, mentre il sistema nervoso somatico permette
			   al cervello di <b>percepire le sensazioni e controllare i muscoli volontari</b>.
		</p>
	</div>
  </section>
</div>

<script src="../scripts/main.js"></script>
</body>

</html>