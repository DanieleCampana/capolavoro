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
	<title>Differenze</title>
	<link rel="stylesheet" href="../styles/sidebar.css">
	<link rel="stylesheet" href="../styles/main.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body id="body" style="font-family: <?php echo "$font"; ?>" onload="openNav()">
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
    <li><a href="rnb.php">Reti neurali biologiche</a></li>
	<li><a href="differences.php" style="background-color:#555">Differenze tra reti neurali</a></li>
	<li><a href="apps.php">Applicazioni</a></li>
	<li><a class="openinx" onclick="openNav2()">☰ Indice</a></li> 
</div>

<div id="myRightbar" class="rightbar">
	<a href="javascript:void(0)" class="closeinx" onclick="closeNav2()">←</a>
	<li><a href="#introduzione">Introduzione</a></li>
	<li><a href="#uscite">Uscite comportamentali</a></li>
	<li><a href="#complessita">Complessita' rappresentativa</a></li>
	<li><a href="#architettura">Architettura</a></li>
	<li><a href="#naturaOrganizzativa">Natura organizzativa</a></li>
	<li><a href="#funzioneRobusta">Funzione robusta</a></li>
	<li><a href="#riassunto">Riassunto</a></li>
</div>

<div id="main">
  <button class="openbtn" id="menu" onclick="openNav()">☰ Menu'</button>  
  <section id="introduzione">
  <div class="container <?php echo "$theme"; ?>">
			<h2>Introduzione</h2>
			<p>
			In che modo le reti neurali artificiali (ANN) possono emulare la natura "vivente" delle reti neurali biologiche (BNN)? Negli ultimi anni, varianti di ANN come le reti neurali profonde (DNN), le reti generative avversarie (GAN) e le reti neurali convoluzionali (CNN) sono state addestrate per produrre output che possiamo considerare vivi e generativi. Le GAN, per esempio, hanno reso possibile la generazione procedurale (Risi e Togelius, 2020), facilitando la creazione di arte e altri contenuti creativi. Il modello di apprendimento del linguaggio in un solo passaggio GPT-3 (Brown, et al. 2020), basato su una rete neurale trasformatrice, ha dimostrato prestazioni notevoli. Tuttavia, nonostante questi progressi, esistono limiti nella capacità di tali modelli di produrre output realistici. Ad esempio, interagendo con personaggi virtuali generati proceduralmente, la risposta umana può riflettere l'effetto della "valle inquietante" (Tinwell, et al. 2013). Allo stesso modo, GPT-3 può fare supposizioni strane e talvolta pericolose sul mondo in cui si trova (Marcus e Davis, 2020). Questi limiti suggeriscono la necessità di migliorare i modelli ANN e di considerare soluzioni che traggano ispirazione dalla biologia. Il nostro obiettivo è analizzare le ANN in termini dei loro parallelismi con le BNN, al fine di capire meglio le caratteristiche che potrebbero rendere le ANN più simili ai sistemi viventi. Tali caratteristiche potrebbero non solo migliorare le prestazioni delle ANN, ma anche consentire proprietà di ordine superiore, come una maggiore complessità rappresentativa, una migliore relazione tra l'energia, l'elaborazione delle informazioni e la struttura di rete complessa, e una maggiore robustezza funzionale.
		
			</p>
		</div>
	</section>
	<section id="uscite">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Uscite comportamentali scarne e rappresentazioni interne delle ANN</h2>
			<p>
			Una delle sfide fondamentali nel tentativo di collegare le reti neurali artificiali (ANN) al comportamento intelligente è che le reti neurali non sono state originariamente progettate per emulare il comportamento motorio, ma piuttosto per modellare esplicitamente il mondo interno. Tuttavia, pur essendo modelli del milieu interno, le reti neurali sono strutture emergenti che possono generare comportamenti complessi come output. Questo è in contrasto con l'approccio riduzionista di un Generatore di Pattern Centrale (CPG): un modello fenomenologico interno che produce output comportamentali facilmente interpretabili.
La rappresentazione standard di una ANN presenta tre principali differenze rispetto alle BNN. In primo luogo, le ANN tendono a privilegiare la parsimonia computazionale rispetto alla complessità della biologia neurale. Le ANN sono tipicamente composte da unità (simili a tipi cellulari generici), connessioni (una combinazione di assoni e sinapsi), forza delle connessioni (analoghe alla connettività chimica) e funzioni di attivazione (sostituti dei potenziali d'azione). Al contrario, le BNN includono neuroni biochimicamente complessi, cellule di supporto e connessioni dense con numerosi altri neuroni. In secondo luogo, le BNN sono sistemi ibridi digitali-analogici, mentre le ANN sono tipicamente digitali. Questa differenza è importante perché influisce sulla comunicazione neurale, che è omogeneizzata nelle ANN, mentre varia nelle BNN, dove le cellule possono avere ruoli funzionali distinti e la struttura della rete può essere non uniforme. Infine, le BNN sono caratterizzate da una capacità energetica e da vincoli energetici, che contribuiscono alla loro funzione robusta di fronte a input ambigui o a una mancanza di contesto.

			</p>
		</div>
	</section>
	<section id="complessita">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Complessità rappresentativa</h2>
			<p>
			Richiamando il concetto di parsimonia computazionale, le reti neurali artificiali (ANN) sono rinomate per la loro rappresentazione minimale, specialmente in confronto alle reti neurali biologiche (BNN). Mentre le ANN offrono un metodo per approssimare il parallelismo e la connettività combinatoria del cervello, non riescono a catturare la vasta complessità dei tessuti neurali né dei circuiti come quelli presenti nella retina o nel cervelletto. Ad esempio, la retina mostra una "spaghettificazione neurale", dove i segnali seguono percorsi tortuosi derivati da processi evolutivi. Un altro esempio è dato dalle convoluzioni che caratterizzano la superficie del neocortex mammifero, mostrando una grande complessità non solo di tipi cellulari e connessioni, ma anche di pieghe con una dimensionalità frattale. Queste caratteristiche hanno implicazioni per la topologia delle BNN, che sarà discussa in seguito.
Tuttavia, ciò non implica che le ANN siano inferiori alle BNN. Al contrario, sia le ANN che le BNN, sotto forma di connettoma del pesce zebra, possono produrre rappresentazioni convergenti di fenomeni ambientali come la temperatura. Una distinzione critica tra le due riguarda il ruolo dell'addestramento statico e della plasticità biologica. Le ANN sono definite dai dati, in particolare dai dati etichettati, mentre le BNN possono apprendere senza conoscenze precedenti e possono emergere da precursori dello sviluppo. Questo è reso possibile dalla presenza di un componente innato nelle BNN, che manca nelle ANN. Infatti, le ANN non possiedono componenti innate o biologicamente sistemiche come genomi o processi di sviluppo e crescita estesi. Anche se gli approcci di neuroevoluzione possono approssimare grossolanamente il substrato biologico complesso, i neuroni delle BNN dipendono non solo dall'espressione genica, ma anche dalla dinamica dei neurotrasmettitori e dalla sintesi proteica. A seconda della specie, le BNN producono sia comportamenti riflessivi non appresi, sia comportamenti acquisiti complessi.
La rappresentazione tipica delle ANN, che trae origine da McCulloch e Pitts (1943), si focalizza sull'aspetto computazionale delle reti, mentre altri approcci mettono in evidenza gli aspetti sinaptici e dendritici delle BNN, come il calcolo dendritico e rappresentazioni sparse distribuite. Anche se queste forme alternative di ANN possono essere abbastanza capaci, non riescono comunque a eguagliare i comportamenti più complessi associati alle BNN.

			</p>
		</div>
	</section>
	<section id="architettura">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Eterogeneità e dinamismo dell'architettura di rete</h2>
			<p>Nella recente letteratura sulle reti neurali artificiali (ANN), si è proposta l'idea di introdurre un'eterogeneità simile a quella delle reti neurali biologiche (BNN) nelle ANN altrimenti omogenee. Questa proposta è stata avanzata soprattutto in relazione alle architetture strutturate e alla complessità anatomica. Per quanto riguarda le architetture strutturate, si suggerisce che le ANN debbano replicare i molteplici sistemi di funzioni presenti in una tipica BNN. Ad esempio, le vie visive dei cervelli mammiferi coinvolgono molteplici fasi di processi oltre alle interazioni con sottosistemi attenzionali, emotivi ed autonomi. Questi aspetti potrebbero essere incorporati nelle ANN attraverso l'utilizzo di moduli funzionali interconnessi. La complessità anatomica riveste particolare importanza per abilitare la plasticità al servizio dei meccanismi di apprendimento. Idealmente, l'adozione di regole di apprendimento derivate dalle BNN potrebbe contribuire ad evitare i bias e la varianza estensiva talvolta osservati nelle ANN. Questo approccio potrebbe favorire la creazione di rappresentazioni neurali durature che si adattano nel corso dell'apprendimento. Inoltre, l'inclusione di stocasticità nella funzione delle ANN potrebbe contribuire a migliorare la loro performance, rendendola più simile alle BNN. Insieme, questo dinamismo rappresenta una forma di eterogeneità temporale che si aggiunge all'eterogeneità topologica, imitando le fluttuazioni naturali osservate nelle BNN.

			</p>
		</div>
	</section>
	<section id="naturaOrganizzativa">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Natura organizzativa delle BNN e delle ANN</h2>
			<p>
			Un altro modo per comprendere la complessità delle reti neurali biologiche (BNN) è concepirle come reti cerebrali complesse. Una caratteristica distintiva della struttura complessa della rete delle BNN è l'organizzazione a "club ricco" dei connettomi in diverse specie. Questo fenomeno è stato studiato in modo più approfondito nel nematode C. elegans, dove un piccolo subset di neuroni è connesso alla maggior parte dei neuroni nell'intera BNN, creando hub di rete densi che mostrano comportamenti di legge di potenza. Questo tipo di organizzazione favorisce un'efficiente elaborazione neurale di grandi quantità di informazioni a basso costo energetico. Nei BNN, l'alto consumo energetico associato al metabolismo è compensato dall'organizzazione gerarchica, in cui pochi neuroni svolgono la maggior parte dell'elaborazione. Per esempio, il cervello umano, che è una BNN molto grande, consuma circa 20 watt/ora, una proprietà che sarebbe vantaggiosa da emulare per le ANN, poiché una grande ANN in esecuzione su una GPU consuma tra 150 e 250 watt/ora.
Il principio dell'eterogeneità può essere realizzato attraverso configurazioni di rete flessibili che mostrano topologie altamente ottimizzate. Nei BNN, ciò è ottenuto utilizzando una forma di connettività tutti-con-tutti. Al contrario, i livelli delle ANN sono collegati in modo sequenziale, il che impedisce l'emergere di un flusso di informazioni gerarchico di tipo club ricco. Vedere le BNN come reti complesse, dove le cellule sono connesse in modo potenzialmente tutti-con-tutti, offre una nuova prospettiva sulla configurazione delle ANN. Hinton (2021) ha recentemente proposto il modello GLOM, che considera i benefici prestazionali dell'aggiunta di una struttura interna alle topologie delle ANN. Tuttavia, la topologia non è l'unica conseguenza dell'approccio delle reti complesse. Mentre le BNN consistono in nodi di calcolo asincroni, le ANN hanno una struttura più stereotipata di ordine computazionale e di feedback, dove la distribuzione del flusso di informazioni è uniforme attraverso livelli uniformi di nodi. Sebbene la backpropagation tradizionale consenta l'improvvisazione dei pesi delle connessioni, non imita l'ordine temporale delle BNN, che hanno diversi processi in corso su molte scale temporali diverse.
Un'altra proprietà delle BNN è il ruolo dei processi avversi. Questi possono essere definiti come forme di regolazione fisiologica o autonomica, in cui mentre un processo si spegne, l'altro si attiva. Questo meccanismo è stato osservato in vari contesti, come nella funzione retinica, nei meccanismi di navigazione spaziale degli insetti sociali che cercano cibo, e negli stati psicofisiologici come l'assuefazione. Crucialmente, questo meccanismo si basa sull'esistenza di processi ausiliari alla struttura stessa della rete. Le BNN, come le abbiamo definite, sono influenzate da processi indiretti come il metabolismo, l'omeostasi fisiologica e persino i meccanismi di smaltimento dei rifiuti come il sistema glicemico che agiscono per raffinare costantemente la struttura e la funzione di una rete.

			</p>
		</div>
	</section>
	<section id="funzioneRobusta">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Funzione Robusta</h2>
			<p>
			I processi avversi costituiscono una teoria di funzione e, allo stesso tempo, una dimostrazione della robustezza della funzione nelle reti neurali biologiche (BNN). Mentre la regolazione dinamica dei processi complementari è essenziale per la robustezza, la funzione robusta permette anche capacità macroscopiche in una BNN. Nelle BNN, la robustezza si manifesta in due forme principali: tolleranza ai guasti e tolleranza all'ambiguità. La tolleranza ai guasti si riferisce alla capacità di superare gli errori senza compromettere la funzione. Esempi di meccanismi di tolleranza ai guasti nelle BNN includono la rigenerazione dopo danni al sistema nervoso e l'invarianza al rumore ambientale. La tolleranza all'ambiguità, d'altro canto, consente alle BNN di operare sulla base di intuizioni ed euristiche, per il meglio o per il peggio.
Qual è la fonte di questa funzione robusta nella rete stessa? La chiave risiede nel fatto che le BNN sono caratterizzate da topologie di rete distribuite e decentralizzate. Attraverso l'analisi di sensibilità, scopriamo che sebbene nessun singolo nodo sia essenziale per la funzione continua della rete, alcuni nodi sono più importanti di altri. Anche se le BNN non sono completamente decentralizzate, le funzioni tendono a essere distribuite su tutta la rete. Lo studio della tolleranza agli attacchi mostra che le topologie di rete small-world sono fondamentali per questa resilienza. Le ANN, d'altra parte, non mostrano il mix di decentralizzazione e organizzazione gerarchica che definiscono le BNN. Un'architettura decentralizzata è in parte resa possibile nella BNN dalla capacità di auto-regenerazione, e potrebbe quindi essere una caratteristica delle ANN progettate in modo simile.
Perché dovremmo emulare le BNN? Dopo aver valutato le differenze tra ANN e BNN, ci si potrebbe chiedere qual è il punto di tale confronto. Tuttavia, ci sono tre osservazioni analitiche che mostrano che i parallelismi tra ANN e BNN sono più che semplici analogie. In primo luogo, l'uso di tecniche statistiche comuni per analizzare entrambi i tipi di reti ci consente di comprendere le rappresentazioni abilitate dalla topologia della rete. In secondo luogo, entrambi i tipi di reti devono gestire un compromesso tra parallelismo interattivo e indipendenza. Infine, le ANN possono essere riformulate matematicamente come un grafo diretto, il che consente il tipo di direzionalità osservata come uscite di una BNN.
Un'altra ragione per emulare le BNN nella progettazione delle ANN è sfruttare le capacità di elaborazione delle informazioni dei sistemi biologici. Se la potenza computazionale dei sistemi connessionisti è dovuta alle analogie con i sistemi complessi più che con il cervello, allora molti sistemi che mostrano comportamenti intelligenti potrebbero servire a unificare la nostra comprensione degli universali dell'intelligenza.

			</p>
		</div>
	</section>
	<section id="riassunto">
	<div class="container <?php echo "$theme"; ?>">
			<h2>Riassunto</h2>
			<p>
			Abbiamo esaminato tre differenze principali tra le reti neurali artificiali (ANN) e le reti neurali biologiche (BNN): complessità rappresentativa, dinamismo e struttura organizzativa, e funzione robusta. Questa analisi ha fornito diverse aree di indagine per future ricerche, evidenziando il collegamento essenziale tra sistemi regolatori, contesto morfologico e BNN.
Le ANN richiedono un sistema di supporto per mostrare output comportamentali più realistici? Per simulare questa caratteristica, potremmo considerare modelli computazionali ibridi che combinano le ANN con modelli di apprendimento per rinforzo o computazione evolutiva. Un framework per alcuni di questi modelli esiste già. Ad esempio, Hasson et al. (2020) hanno stabilito un collegamento tra una potenziale funzione di fitness evolutiva multiobiettivo nelle BNN, simile a come i parametri del modello di una ANN vengono ottimizzati. Un altro modo per rendere le ANN più realistiche è modellarle con molti dei componenti fisiologici delle BNN. Questo approccio al realismo biologico ci fornisce sistemi artificiali che emulano semplici sistemi nervosi, ma non supporta un'analisi di grandi quantità di dati.
Tuttavia, possiamo avvicinarci al realismo biologico utilizzando strategie alternative per implementare le ANN piuttosto che modificare l'architettura. Ad esempio, modelli non supervisionati ottimizzati per imitare ampie funzioni biologiche possono svolgere funzioni simili a quelle come l'elaborazione visiva e l'apprendimento sensoriale. Un altro approccio, chiamato deep learning guidato dall'obiettivo, utilizza un obiettivo diverso rispetto alla tipica ANN e produce risultati più simili alle BNN. Ci sono molte opportunità di ricerca per i ricercatori della Vita Artificiale per contribuire a comprendere come possiamo colmare il divario tra le ANN e le BNN, oltre a sfruttare i dettagli delle BNN per potenziare le attuali architetture delle ANN.

			</p>
		</div>
	</section>
</div>

<script src="../scripts/main.js"></script>
</body>

</html>