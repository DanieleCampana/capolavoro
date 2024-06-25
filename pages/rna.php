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
	<title>Reti Neurali Artificiali</title>
	<link rel="stylesheet" href="../styles/sidebar.css">
	<link rel="stylesheet" href="../styles/main.css">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=default'></script>

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
		<li><a href="rna.php" style="background-color:#555">Reti neurali artificiali</a></li>
		<li><a href="rnb.php">Reti neurali biologiche</a></li>
		<li><a href="differences.php">Differenze tra reti neurali</a></li>
		<li><a href="apps.php">Applicazioni</a></li>
		<li><a class="openinx" onclick="openNav2()">☰ Indice</a></li>
	</div>

	<div id="myRightbar" class="rightbar">
		<a href="javascript:void(0)" class="closeinx" onclick="closeNav2()">←</a>
		<li><a href="#introduzione">Introduzione</a></li>
		<li><a href="#definizione">definizione</a></li>
		<li><a href="#neuroni">Neuroni e trasmissione</a></li>
		<li><a href="#allenamento">Apprendimento</a></li>
		<li><a href="#notazione">Notazione</a></li>
		<li><a href="#costo">Funzioni di costo</a></li>
		<li><a href="#gradiente">Discesa del gradiente</a></li>
		<li><a href="#attivazione">Funzioni di attivazione</a></li>
		<li><a href="#backpropagation">Backpropagation</a></li>
		<li><a href="#differenziale">Applicazione del calcolo differenziale in più variabili</a></li>
	</div>

	<div id="main">
		<button class="openbtn" id="menu" onclick="openNav()">☰ Menu'</button>
		<section id="introduzione">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Introduzione</h2>
				<p>
					In questa pagina tratteremo delle reti neurali artificiali
					(abbreviate con ANN, dall'inglese Artificial Neural Netwotks)
					dal punto di vista teorico, soffermandoci sui princìpi di funzionamento
					e i principali algoritmi implementati. Come vedremo successivamente,
					per comprendere le ANN è necessario avere buone conoscenze di matematica,
					in particolare calcolo matriciale e calcolo differenziale in più variabili.
				</p>
			</div>
		</section>
		<section id="definizione">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Definizione</h2>
				<p>
					Una rete neurale artificiale, normalmente chiamata solo "rete neurale",
					è un modello matematico/informatico di calcolo basato sulle reti neurali biologiche.
					Tale modello è costituito da un gruppo di interconnessioni di informazioni
					costituite da neuroni artificiali e processi che utilizzano un approccio
					di connessionismo di calcolo. Nella maggior parte dei casi una ANN
					è un sistema adattivo che cambia la propria struttura in base a
					informazioni esterne o interne che scorrono attraverso la rete
					stessa durante la fase di apprendimento.
					<br>
					Una ANN riceve segnali esterni su uno
					strato di nodi di ingresso (detti neuroni di input), ciascuno
					dei quali è collegato con numerosi nodi interni, organizzati
					in più livelli (chiamati hidden layers). Ogni nodo elabora i segnali
					ricevuti e trasmette il risultato a nodi successivi, fino a raggiungere i
					noti di uscita (detti neuroni di output).
				</p>

				<img src="../images/ann.png" alt="Immagine di un neurone">
			</div>
		</section>
		<section id="neuroni">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Neuroni e trasmissione</h2>
				<p>
					Una rete neurale, come accennato in precedenza, è formata da diversi layers,
					ognuno dei quali contiene almeno un neurone. Ogni neurone è collegato a tutti
					i neuroni del layer precedente e del layer successivo.
					Ma come sono fatti i neuroni di cui si parla? Ogni neurone è caratterizzato da:
				</p>
				<ul style="text-align:left;">
					<li>un valore di input</li>
					<li>un peso (indicato con w, dall'inglese weight)</li>
					<li>un valore di soglia (indicato con b, dall'inglese bias)</li>
					<li>un valore di output (anche chiamato "attivazione")</li>
				</ul>
				<p>
					Per ogni neurone, eccetto per quelli d'ingresso, il valore di input è ottenuto
					calcolando i prodotti tra valore di output e il peso della specifica connessione
					e infine sommando tutti i prodotti. Il peso indica l'efficacia sinaptica della connessione
					tra due neuroni.
					Per esempio, considerando la ANN riportata nell'immagine precedente, si osserva che
					sono presenti due hidden layers, il primo dei due ha 5 neuroni mentre il secondo ne ha 3.
					Scegliendo arbitrariamente un neurone da analizzare, matematicamente si ha:
					$$\sum_{i=1}^{n} {w_i \cdot x_i}$$
					$$n = \text{numero di neuroni del layer precedente}$$
					$$w_i = \text{peso i-esimo degli n}$$
					$$x_i = \text{i-esimo output degli n}$$

					Se tale input supera il bias, allora il neurone si attiverà.
				</p>
			</div>
		</section>
		<section id="allenamento">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Apprendimento</h2>
				<p>
					Per migliorare un rete neurale, si effettua una fase chiamata
					"allenamento" (training). In questa fase, tramite algoritmi che vedremo in seguito,
					vengono calcolati i pesi e i bias da assegnare ad ogni neurone affinchè la rete
					restituisca gli output attesi. Infatti, il training viene effettuato fornendo alla rete
					dei dati, conoscendo a priori quale deve essere la risposta della rete.
					La fase di training è caratterizzata da molti processi di training iterati.
					Per esempio, riferendoci ad una ANN per il riconoscimento delle cifre scritte manualmente,
					ad ogni neurone di input verrà associato un pixel dell'immagine che contiene la cifra.
					Dopodichè viene segnalata alla rete la cifra rappresentata nell'immagine,
					in modo tale che essa possa modificare i propri bias e pesi affinchè il suo
					output coincida il più possibile con il valore previsto.
					<br>
				</p>
			</div>
		</section>
		<section id="notazione">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Notazione</h2>
				<p>
					Prima di proseguire è conveniente introdurre una nuova notazione che ci consenta
					di rappresentare semplicemente tutte le connessioni tra due specifici layer.
					L'attivazine di ogni neurone verrà indicata
					con \( {a_n}^{(i)} \), dove l'indice \( n \) indica l'n-esimo neurone del layer
					e \( i \) rappresenta il layer in cui si trova quel particolare neurone
					(entrambi gli indici hanno come primo valore 0). <br>
					Per quanto riguarda i pesi delle connessioni invece, essi verranno indicati con
					\(w_{k,n}\), dove l'indice \(k\) indentifica il k-esimo neurone del layer successivo
					e \(n\) indica l'n-esimo neurone del layer "corrente". <br>
					Inoltre, i bias dei neuroni vengono indicati con \(b_n\).
				</p>
				<div style="display:flex;">
					<img src="../images/notation.png" alt="Immagine di un neurone" style="padding:2px;">
					<p style="margin-top:0;">
						Per esempio, in riferimento all'immagine accanto: <br>
						i layer sono due, quindi \( i \) potrà assumere i valori \( 0 \) o \( 1 \).
						Nel primo layer i neuroni sono \( 8 \), quindi \( n \) potrà assumere i valori
						da \( 0 \) a \( 7 \) (estremi inclusi). Invece, nel secondo i neuroni sono \( 6 \),
						di conseguenza \( n \) assumerà valori tra \( 0 \) e \( 5 \). <br>
						Quindi, l'attivazione del primo neurone del primo layer è indicata con \( {a_0}^{(0)} \),
						la seconda con \( {a_1}^{(0)} \) e cos' via fino a \( {a_7}^{(0)} \). <br>
						Se invece volessimo riferirci al secondo layer, le attivazioni sarebbero \( {a_0}^{(1)} \)
						per il primo neurone, \( {a_1}^{(1)} \) per il secondo e così via fino \( {a_5}^{(1)} \). <br>
						Inoltre, i pesi delle connessioni tra tutti i neuroni del primo layer e il primo neurone
						del secondo layer, sono indicati con \(w_{0,1}\), \(w_{0,2}\), fino a \(w_{0,7}\).
					</p>
				</div>
				<p>
					Si definisce una matrice di una sola colonna (vettore colonna) che contiene
					tutte le attivazioni di un layer. Per esempio, per il primo layer si ha:
					$$\begin{pmatrix}
					{a_0}^{(0)} \\
					{a_1}^{(0)} \\
					\vdots \\
					{a_n}^{(0)}
					\end{pmatrix}$$
					Si definisce inoltre una matrice che contiene tutti i pesi delle connessioni.
					Ogni riga di tale matrice corrisponde alle connessioni tra un layer e uno specifico
					neurone del layer successivo. Quindi:
					$$\begin{pmatrix}
					w_{0,0} & w_{0,1} & \cdots & w_{0,n} \\
					w_{1,0} & w_{1,1} & \cdots & w_{1,n} \\
					\vdots & \vdots & \ddots & \vdots \\
					w_{k,0} & w_{k,1} & \cdots & w_{k,n} \\
					\end{pmatrix}$$
					Infine, anche tutti i bias dei neuroni di un singolo layer vengono posti
					in una matrice, ottenendo:
					
					$$\begin{pmatrix}
					b_0 \\
					b_1 \\
					\vdots \\
					b_n
					\end{pmatrix}$$
					In definitiva, per indicare i valori che riceveranno come input i
					neuroni in base alle connessioni con il layer precedente si utilizza
					il prodotto e la somma tra matrici:
					$$
					a^{(1)} =

					\begin{pmatrix}
					w_{0,0} & w_{0,1} & \cdots & w_{0,n} \\
					w_{1,0} & w_{1,1} & \cdots & w_{1,n} \\
					\vdots & \vdots & \ddots & \vdots \\
					w_{k,0} & w_{k,1} & \cdots & w_{k,n} \\
					\end{pmatrix}

					\begin{pmatrix}
					{a_0}^{(0)} \\
					{a_1}^{(0)} \\
					\vdots \\
					{a_n}^{(0)}
					\end{pmatrix}

					+\begin{pmatrix}
					b_0 \\
					b_1 \\
					\vdots \\
					b_n
					\end{pmatrix}
					$$

					In generale, indicando con \(W\) la matrice dei pesi, con \(b\) la matrice
					dei bias e con \(a^{(i)}\) la matrice delle attivazioni dell'i-esimo layer,
					si ha:
					$$ a^{(i+1)} = W a^{(i)} + b$$


				</p>
			</div>
		</section>
		<section id="costo">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Funzione di costo</h2>
				<p>
					Come accennato nella sezione "Apprendimento", nela fase di training
					è necessario segnalare alla rete neurale se l'output da essa fornito
					è sufficientemente simile a quello atteso.
					Per fare ciò si definisce una funzione di costo del tipo:
					\({(O_1 - O_0)}^2\), dove \(O_0\) è il valore atteso e \(O_1\) è il valore
					fornito dalla rete.
					Si calcola quindi il costo per ogni processo di training e successivamente
					si calcola il valore medio di tale costo per il training complessivo.
					Maggiore è il valore medio, minore è l'efficacia della rete, di conseguenza
					per ottenere una buona rete neurale si cerca di minimizzare
					la funzione di costo. <br>
					Il numero di variabili della funzione di costo dipende dal numero
					di neuroni (e come sono disposti) della rete neurale.
				</p>
			</div>
		</section>
		<section id="gradiente">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Discesa del gradiente</h2>
				<p>
					Una rete neurale ha tendenzialmente più di \(1\) neurone di input di
					conseguenza la funzione di costo è di più variabili.
					Siccome non è sempre possibile trovare analiticamente i punti di massimo e di minimo
					(soprattutto quelli globali) di una funzione in più variabili, si utilizzano dei metodi
					che restituiscano i massimi e i minimi in maniera approssimata e senza certezza che essi
					siano globali. Un metodo molto conosciuto e utilizzato per fare ciò è chiamato
					<b>discesa del gradiente</b>.
					Prima di tutto: cos'è il gradiente? <br>
					Il gradiente è un operatore matematico che si applica ad una funzione a valori reali
					(campo scalare) e restituisce come risultato una funzione vettoriale. Viene indicato
					con \(\nabla f\), dove \(f\) è la funzione della quale si vuole calcolare il gradiente
					e \(\nabla\) è detto "operatore nabla". In un generico sistema di coordinate
					\({\mathbb{R}}^n\) con coordinate \((x_1, x_2, \cdots, x_n)\),
					nabla è un operatore vettoriale le cui \(n\) componenti corrispondono all'operatore
					di derivata parziale rispetto all'n-esima coordinata, quindi:
					$$\nabla = \begin{pmatrix}
					\frac{\partial}{\partial x_1}, & \frac{\partial}{\partial x_2}, & \cdots, & \frac{\partial}{\partial x_n}
					\end{pmatrix}$$
					Concretamente, il gradiente di una funzione è una funzione vettoriale (campo vettoriale)
					che se calcolata in un generico punto \(p\) restituisce il vettore (verso e modulo)
					che "indica" la crescita più rapida della funzione. In altri termini, indica in che direzione
					bisogna "muoversi" per far crescere la funzione più rapidamente. Di conseguenza calcolando
					\(-\nabla f\) si ottiene l'opposto, quindi la direzione dove la funzione decresce
					più rapidamente. <br>
					Il metodo di discesa del gradiente consiste nel calcolare il gradiente della funzione,
					"spostarsi" in direzione \(-\nabla f\) e ripetere il procedimento fino ad ottenere
					con buona approssimazione un minimo della funzione.<br>
					Fondamentalmente ogni componente di \(-\nabla f\) sarà associata ad un peso o un bias
					(della funzione di costo) e "dirà" ad esso quanto e come deve cambiare (se aumentare o diminuire).
				</p>
			</div>
		</section>
		<section id="attivazione">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Funzioni di attivazione</h2>
				<p>
					Siccome gli input dei un neuroni (le somme ponderate di tutti gli output dei neuroni precedenti)
					possono potenzialmente assumere qualsiasi valore, è conveniente scalarli in modo tale che appartengano
					ad un certo intervallo. Per fare ciò si ricorre a particolari funzioni dette "di attivazine".
					Le funzioni di attivazione più utilizzate sono:
				<ol style="text-align:left;">
					<li>Sigmoide, indicata con \( \sigma(x) \)</li>
					<li>Tangente iperbolica, indicata con \( \tanh(x) \)</li>
					<li>ReLu (Rectified Linear Unit), indicata con \( {(x)}^{+} \)</li>
				</ol>
				$$
				1. \quad \sigma(x) = \frac{1}{1 + e^{-x}}
				$$
				<ul style="text-align:left;">
					<li>Normalizza l'output del neurone in un intervallo compreso tra \(0\) e \(1\),
						fornendo la probabilità del valore di input. Ciò rende la sigmoide utile
						per i neuroni di output delle reti neurali finalizzate alla classificazione.
					</li>
					<li>
						È ad alto costo computazionale poiché richiede il calcolo di un esponenziale,
						il che rende più lenta la convergenza della rete.
					</li>
					<li>
						Soffre di problemi di saturazione. Un neurone è considerato saturo se
						raggiunge il suo valore massimo o minimo (\( \sigma(x) = 1 \) oppure \(0\)),
						per cui la sua derivata \( \frac{d}{dx}\sigma(x) = \sigma(x)(1 - \sigma(x)) \) è uguale a 0.
						In tal caso, non vi è alcun aggiornamento dei pesi. Il gradiente della
						funzione di costo rispetto ai pesi di conseguenza svanisce fino a
						scendere a 0. Questo fenomeno è noto come "scomparsa del gradiente" e causa
						uno scarso apprendimento per le reti neurali.
					</li>
					<li>
						Non è una funzione centrata sullo zero. Quindi, il gradiente di tutti
						i pesi collegati ad uno stesso neurone è positivo o negativo. Durante
						il processo di apprendimento, questi pesi possono muoversi solo in una
						direzione (positiva o negativa) alla volta. Ciò rende più difficile
						l’ottimizzazione della funzione di costo.
					</li>
				</ul>

				$$
				2. \quad \tanh(x) = \frac{e^x - e^{-x}}{e^x + e^{-x}}
				$$
				<ul style="text-align:left;">
					<li>
						Normalizza l'output del neurone in un intervallo compreso tra -1 e 1.
					</li>
					<li>
						A differenza della sigmoide, è una funzione centrata sullo zero, quindi
						l'ottimizzazione della funzione di costo diventa più semplice.
					</li>
					<li>
						Analogamente alla sigmoide, la tangente iperbolica richiede un'elevata intensità
						di calcolo e soffre di problemi di saturazione e quindi di scomparsa
						del gradiente. Infatti, quando il neurone raggiunge il valore
						minimo o massimo del suo intervallo, che corrispondono
						rispettivamente a -1 e 1, la sua derivata \( \frac{d}{dx}\tanh(x) = 1 - \tanh^2(x) \)
						è pari a 0.
					</li>
				</ul>

				$$
				3. \quad {(x)}^{+} = \begin{cases}
				0 & x \ge 0 \\ x & x > 0
				\end{cases}$$
				<ul style="text-align:left;">
					<li>
						È facile calcolare in modo tale da far convergere rapidamente la rete neurale.
					</li>
					<li>
						Poiché la sua derivata non è 0 per i valori positivi del neurone
						(\( \frac{d}{dx}(x)^{+} = 1 \) per \(x \ge 0\)), ReLu non si satura.
						La saturazione e la scomparsa del gradiente si verificano
						solo per valori negativi che, dati a ReLu, vengono trasformati in 0.
					</li>
					<li>
						Come la sigmoide non è una funzione centrata sullo zero.
					</li>
				</ul>
				</p>
			</div>
		</section>
		<section id="backpropagation">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Backpropagation</h2>
				<p style="margin-bottom: 0;">
					La retropropagazione dell'errore (in inglese backpropagation) è un algoritmo per l'addestramento
					delle reti neurali, usato in combinazione con un metodo di ottimizzazione
					come per esempio la discesa del gradiente, visto in precedenza.<br>
					la backpropagation prevede due fasi: una che procede in avanti ed una che procede
					all'indietro. La fase che precede in avanti presenta un esempio alla rete neurale,
					poi lo compara con l'uscita effettiva e calcola l'errore; la fase che procede
					all'indietro propaga l'errore indietro nella rete, aggiustando i pesi e i bias a
					seconda del gradiente precedentemente calcolato.<br>
					In generale, per cambiare l'attivazione di un neurone, si posso modificare tre parametri:
				</p>
				<ul style="text-align:left;">
					<li>bias di quel neurone</li>
					<li>pesi delle connessioni con quel neurone</li>
					<li>le attivazioni dei neuroni del layer precedente</li>
				</ul>
				<p>
					Siccome non si ha accesso diretto alle attivazioni dei neuroni, per modificare
					quelle del layer precedente, si devono trasmettere indietro nella rete le informazioni
					sull'errore e sul gradiente della funzione di costo (da ciò deriva il nome
					retropropagazione dell'errore), in modo tale da poter cambiare i bias dei
					neuroni del layer precedente e i pesi delle connessioni del layer precedente a sua volta.
					Tale procedimento viene ripetuto fino a quando l'errore non raggiunge i neuroni di input,
					modificando quindi tutti i bias e tutti i pesi della rete.
				</p>

			</div>
		</section>
		<section id="differenziale">
			<div class="container <?php echo "$theme"; ?>">
				<h2>Applicazione del calcolo differenziale in più variabili</h2>
				<p>
					Per iniziare a comprendere in che modo il calcolo differenziale in più
					variabili sia alla base delle reti neurali, consideriamo un rete estremamente
					semplice:
				</p>
				<img src="../images/simpleNet.PNG" alt="Immagine di una rete neurale" style="padding:2px; width: 60%">
				<p style="text-align:left">
					Durante la trattazione verrà utilizzata la seguente notazione:
					$$
					L = \text{numero di layer della rete}
					$$

					$$
					a^{(x)} = \text{attivazione del naurone del layer x} \\
					\text{(di conseguenza l'ultimo neurone della rete sara' indicato con } a^{(L)} \text{)}
					$$

					$$
					w^{(x)} = \text{peso della connesione tra il neurone del layer x e x-1}
					$$

					$$
					b^{(x)} = \text{bias del naurone del layer x}
					$$

					$$
					y = \text{valore atteso dall'ultima attivazione}
					$$

					$$
					C_n = (a^{(L)} - y)^2= \text{costo dell'n-esimo processo di training} \\
					\text{(il costo del primo processo sara' indicato con } C_0 \text{)}
					$$

					Secondo ciò che è stato detto fino ad ora, si ha che \(a^{(x)} = \sigma(w^{(x)}a^{(x-1)} + b^{(x)})\)
					(per esmplicità si è scelto di utilizzare la sigmoide come funzione di attivazione). Per alleggerire la notazione,
					\(w^{(x)}a^{(x-1)} + b^{(x)}\) verrà indicato con \(z^{(x)}\) e di conseguenza si ha \(a^{(x)} = \sigma(z^{(x)})\).
					Analizzando le dipendenze tra le varie funzioni, si conclude che:

					$$
					C_n = C_n(a^{(x)}) \text{ quindi} C_n \text{dipende da } a^{(x)}
					$$
					$$
					a^{(x)} = a^{(x)}(z^{(x)}) \text{ quindi } a^{(x)} \text{ dipende da } z^{(x)}
					$$
					$$
					z^{(x)} = z^{(x)}(w^{(x)},\text{ } a^{(x-1)},\text{ } b^{(x)}) \text{ quindi } z^{(x)} \text{ dipende da } w^{(x)},\text{ } a^{(x-1)} \text{ e } b^{(x)}
					$$
					Quindi, una prima domanda che ci si potrebbe porre è: come varia \(C_n\) quando varia \(w^{(x)}\), \(a^{(x-1)}\) o \(b^{(x)}\)?
					matematicamente, per rispondere a tale domanda è sufficiente calcolare:
					$$
					\frac{\partial C_n}{\partial w^{(x)}} \\
					\frac{\partial C_n}{\partial a^{(x-1)}} \\
					\frac{\partial C_n}{\partial b^{(x)}}
					$$

					Considerando le dipendenze tra funzioni esplicitate in precedenza e la regola di derivazione di una funzione composta, si ha:
					$$
					\frac{\partial C_n}{\partial w^{(x)}} =
					\frac{\partial z^{(x)}}{\partial w^{(x)}}
					\frac{\partial a^{(x)}}{\partial z^{(x)}}
					\frac{\partial C_n}{\partial a^{(x)}}
					$$
					Inoltre, ricordando le definizioni date di tutte le funzioni che stiamo trattando, si può procedere
					a calcolare le singole derivate parziali:
					$$
					\frac{\partial C_n}{\partial a^{(x)}} = 2(a^{(L)} - y) \\
					\frac{\partial a^{(x)}}{\partial z^{(x)}} = \sigma'(z^{(x)}) \\
					\frac{\partial z^{(x)}}{\partial w^{(x)}} = a^{(x-1)}
					$$
					E quindi:
					$$
					\frac{\partial C_n}{\partial w^{(x)}} =
					2a^{(x-1)} \sigma'(z^{(x)}) (a^{(L)} - y)
					$$
					Il calcolo precedente è relativo ad un solo processo di training \(C_n\). Considerando invece il costo \(C\)
					per il training complessivo si ha:
					$$
					C = \frac{1}{n} \sum_{k=0}^{n-1} \frac{\partial C_k}{\partial w^{(x)}}
					$$
					Analogamente, si ricavano anche
					\(\frac{\partial C_n}{\partial a^{(x-1)}}\) e
					\(\frac{\partial C_n}{\partial b^{(x)}}\):
					$$
					\frac{\partial C_n}{\partial a^{(x-1)}} =
					\frac{\partial z^{(x)}}{\partial a^{(x-1)}}
					\frac{\partial a^{(x)}}{\partial z^{(x)}}
					\frac{\partial C_n}{\partial a^{(x)}} \\
					\frac{\partial z^{(x)}}{\partial a^{(x-1)}} = w^{(x)}
					$$
					Quindi:
					$$
					\frac{\partial C_n}{\partial a^{(x-1)}} = 2w^{(x)} \sigma'(z^{(x)}) (a^{(L)} - y)
					$$
					Infine:
					$$
					\frac{\partial C_n}{\partial a^{(x-1)}} =
					\frac{\partial z^{(x)}}{\partial b^{(x)}}
					\frac{\partial a^{(x)}}{\partial z^{(x)}}
					\frac{\partial C_n}{\partial a^{(x)}} \\
					\frac{\partial z^{(x)}}{\partial b^{(b)}} = 1
					$$
					E quindi:
					$$
					\frac{\partial C_n}{\partial a^{(x-1)}} = 2\sigma'(z^{(x)}) (a^{(L)} - y)
					$$
					Tale processo va ripetuto per tutti i neuroni, calcolando le variazioni di \(C_n\) al variare di tutti i bias, pesi e input.
					Generalizzando ad una rete con più di un neurone per ogni layer si ha:
					$$
					{a_k}^{(x-1)} = \text{attivazione del k-esimo naurone del layer x-1} \\
					{a_j}^{(x)} = \text{attivazione del j-esimo naurone del layer x} \\
					\text{(con l'indice j ci si riferisce ad un layer x e con l'indice k al layer x-1)} \\
					{w_{jk}}^{(x)} = \text{peso della connesione tra il k-esimo neurone del layer x-1 e il j-esimo del layer x} \\
					C_n = \sum_{j=0}^{n_x-1} {({a_j}^{(L)} - y_j)^2} = \text{costo dell'n-esimo processo di training} \\
					{z_j}^{(x)} = \sum_{i=0}^{n_{x-1}-1} { {w_{ji}}^{(x)} {a_i}^{(x-1)}+ {b_j}^{(x)}} \\
					{a_j}^{(x)} = \sigma({z_j}^{(x)})
					$$

				</p>
			</div>
		</section>
	</div>

	<script src="../scripts/main.js"></script>
</body>

</html>