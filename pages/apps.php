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
	<title>Applicazioni</title>
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
	<li><a href="differences.php">Differenze tra reti neurali</a></li>
	<li><a href="apps.php" style="background-color:#555">Applicazioni</a></li>
	<li><a class="openinx" onclick="openNav2()">☰ Indice</a></li> 
</div>

<div id="myRightbar" class="rightbar">
	<a href="javascript:void(0)" class="closeinx" onclick="closeNav2()">←</a>
	<li><a href="#introduzione">Introduzione</a></li>
            <li><a href="#prerequisiti">Prerequisiti</a></li>
            <li><a href="#importazione-librerie">Importazione delle Librerie</a></li>
            <li><a href="#caricamento-dataset">Caricamento del Dataset</a></li>
            <li><a href="#normalizzazione-dataset">Normalizzazione del Dataset</a></li>
            <li><a href="#definizione-modello">Definizione del Modello di Rete Neurale</a></li>
            <li><a href="#compilazione-modello">Compilazione del Modello</a></li>
            <li><a href="#addestramento-modello">Addestramento del Modello</a></li>
            <li><a href="#salvataggio-modello">Salvataggio del Modello</a></li>
            <li><a href="#valutazione-modello">Valutazione del Modello</a></li>
            <li><a href="#conclusione">Conclusione</a></li>
</div>

<div id="main">
<section id="introduzione">
<div class="container <?php echo "$theme"; ?>">
            <h2>Introduzione</h2>
            <p>
                Questo tutorial ti guiderà attraverso i passaggi necessari per addestrare un modello di rete neurale per il riconoscimento delle cifre scritte a mano utilizzando Python e le librerie TensorFlow, OpenCV, NumPy e Matplotlib.
            </p>
        </div>
    </section>

    <section id="prerequisiti">
    <div class="container <?php echo "$theme"; ?>">
            <h2>Prerequisiti</h2>
            <p>
                Assicurati di avere installato Python e le seguenti librerie:
                
                    <li>TensorFlow</li>
                    <li>OpenCV</li>
                    <li>NumPy</li>
                    <li>Matplotlib</li>
                
                Puoi installarle utilizzando pip:
                <pre><code>pip install tensorflow opencv-python numpy matplotlib</code></pre>
            </p>
        </div>
    </section>

    <section id="importazione-librerie">
    <div class="container <?php echo "$theme"; ?>">
            <h2>1. Importazione delle Librerie</h2>
            <p>
                Inizia importando le librerie necessarie per il progetto:
                <pre><code>import os
import cv2
import numpy as np
import matplotlib.pyplot as plt
import tensorflow as tf
                </code></pre>
            </p>
        </div>
    </section>

    <section id="caricamento-dataset">
    <div class="container <?php echo "$theme"; ?>">
            <h2>2. Caricamento del Dataset</h2>
            <p>
                Carica il dataset delle cifre scritte a mano (MNIST) utilizzando TensorFlow:
                <pre><code>dataset_cifre = tf.keras.datasets.mnist
(i_train, l_train), (i_test, l_test) = dataset_cifre.load_data()
                </code></pre>
            </p>
        </div>
    </section>

    <section id="normalizzazione-dataset">
    <div class="container <?php echo "$theme"; ?>">
            <h2>3. Normalizzazione del Dataset</h2>
            <p>
                Normalizza i dati delle immagini per portare i valori dei pixel in un intervallo compreso tra 0 e 1:
                <pre><code>i_train = tf.keras.utils.normalize(i_train, axis=1)
i_test = tf.keras.utils.normalize(i_test, axis=1)
                </code></pre>
            </p>
        </div>
    </section>

    <section id="definizione-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>4. Definizione del Modello di Rete Neurale</h2>
            <p>
                Definisci l'architettura del modello di rete neurale utilizzando Keras:
                <pre><code>model = tf.keras.models.Sequential()
model.add(tf.keras.layers.Flatten(input_shape=(28, 28)))
model.add(tf.keras.layers.Dense(128, activation='relu'))
model.add(tf.keras.layers.Dense(128, activation='relu'))
model.add(tf.keras.layers.Dense(128, activation='relu'))
model.add(tf.keras.layers.Dense(128, activation='relu'))
model.add(tf.keras.layers.Dense(10, activation='softmax'))
                </code></pre>
            </p>
        </div>
    </section>

    <section id="compilazione-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>5. Compilazione del Modello</h2>
            <p>
                Compila il modello specificando l'ottimizzatore, la funzione di perdita e le metriche di valutazione:
                <pre><code>model.compile(optimizer='adam', loss='sparse_categorical_crossentropy', metrics=['accuracy'])
                </code></pre>
            </p>
        </div>
    </section>

    <section id="addestramento-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>6. Addestramento del Modello</h2>
            <p>
                Addestra il modello sui dati di addestramento:
                <pre><code>model.fit(i_train, l_train, epochs=3)
                </code></pre>
            </p>
        </div>
    </section>

    <section id="salvataggio-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>7. Salvataggio del Modello</h2>
            <p>
                Salva il modello addestrato per utilizzi futuri:
                <pre><code>model.save('riconoscimento.model')
                </code></pre>
            </p>
        </div>
    </section>

    <section id="valutazione-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>8. Valutazione del Modello</h2>
            <p>
                Valuta il modello sui dati di test per verificarne l'accuratezza:
                <pre><code>loss, accuracy = model.evaluate(i_test, l_test)
print(loss)
print(accuracy)
                </code></pre>
            </p>
        </div>
    </section>
    <section id="caricamento-modello">
    <div class="container <?php echo "$theme"; ?>">
            <h2>9. Caricamento del Modello Pre-addestrato</h2>
            <p>
                Carica il modello di rete neurale precedentemente addestrato e salvato:
                <pre><code>model = tf.keras.models.load_model('riconoscimento.model')</code></pre>
                <strong>Nota:</strong> Assicurati che il file <code>riconoscimento.model</code> sia nella stessa directory del tuo script Python.
            </p>
        </div>
    </section>

    <section id="inizializzazione-contatore">
    <div class="container <?php echo "$theme"; ?>">
            <h2>10. Inizializzazione del Contatore delle Immagini</h2>
            <p>
                Inizializza un contatore per gestire le immagini da analizzare:
                <pre><code>image_number = 1</code></pre>
            </p>
        </div>
    </section>

    <section id="ciclo-predizione">
    <div class="container <?php echo "$theme"; ?>">
            <h2>11. Ciclo per la Lettura e la Predizione delle Immagini</h2>
            <p>
                Implementa un ciclo che legge le immagini, le processa e utilizza il modello per fare previsioni:
                <pre><code>while os.path.isfile(f"cifre/cifra{image_number}.png"):
    try:
        # Leggi l'immagine in scala di grigi
        img = cv2.imread(f"cifre/cifra{image_number}.png")[:,:,0]
        
        # Inverti i pixel dell'immagine
        img = np.invert(np.array([img]))
        
        # Normalizza l'immagine
        img = img / 255.0
        
        # Effettua la predizione utilizzando il modello
        prediction = model.predict(img)
        
        # Visualizza l'immagine e la previsione
        plt.imshow(img[0], cmap=plt.cm.binary)
        plt.title(f"Predizione: {np.argmax(prediction)}")
        plt.show()
        
        # Stampa la previsione
        print(f"La cifra è: {np.argmax(prediction)}")
    except Exception as e:
        print(f"Errore: {e}")
    finally:
        image_number += 1
                </code></pre>
            </p>
        </div>
    </section>

    <section id="spiegazione-codice">
    <div class="container <?php echo "$theme"; ?>">
            <h2>Spiegazione del Codice</h2>
            <p>
                <strong>Lettura dell'Immagine:</strong>
                <pre><code>img = cv2.imread(f"cifre/cifra{image_number}.png")[:,:,0]</code></pre>
                Utilizza OpenCV per leggere l'immagine dalla cartella <code>cifre</code>. Seleziona solo il canale di scala di grigi <code>[0]</code> poiché le immagini sono in bianco e nero.
            </p>
            <p>
                <strong>Inversione dei Pixel:</strong>
                <pre><code>img = np.invert(np.array([img]))</code></pre>
                Inverte i pixel dell'immagine. Questo è importante perché il modello potrebbe essere stato addestrato su immagini dove le cifre sono bianche su sfondo nero.
            </p>
            <p>
                <strong>Normalizzazione dell'Immagine:</strong>
                <pre><code>img = img / 255.0</code></pre>
                Normalizza i valori dei pixel a un intervallo di [0, 1], rendendoli compatibili con i valori sui quali il modello è stato addestrato.
            </p>
            <p>
                <strong>Predizione:</strong>
                <pre><code>prediction = model.predict(img)</code></pre>
                Utilizza il modello per fare una predizione sull'immagine elaborata.
            </p>
            <p>
                <strong>Visualizzazione:</strong>
                <pre><code>plt.imshow(img[0], cmap=plt.cm.binary)
plt.title(f"Predizione: {np.argmax(prediction)}")
plt.show()</code></pre>
                Usa Matplotlib per visualizzare l'immagine e la previsione del modello.
            </p>
            <p>
                <strong>Stampa della Previsione:</strong>
                <pre><code>print(f"La cifra è: {np.argmax(prediction)}")</code></pre>
                Stampa la cifra predetta dal modello.
            </p>
            <p>
                <strong>Gestione degli Errori:</strong>
                <pre><code>except Exception as e:
    print(f"Errore: {e}")
finally:
    image_number += 1</code></pre>
                Gestisce eventuali errori durante la lettura e l'elaborazione dell'immagine. Incrementa il contatore <code>image_number</code> per passare all'immagine successiva.
            </p>
        </div>
    </section>

    <section id="conclusione">
    <div class="container <?php echo "$theme"; ?>">
            <h2>Conclusione</h2>
            <p>
                Seguendo questi passaggi dettagliati, sarai in grado di utilizzare un modello pre-addestrato per riconoscere le cifre in nuove immagini. Questo processo può essere esteso e adattato per vari altri compiti di riconoscimento delle immagini, rendendolo uno strumento potente per l'apprendimento automatico e la computer vision. Assicurati di testare il tuo modello con diverse immagini per valutare la sua accuratezza e migliorare il processo di predizione.
            </p>
        </div>
    </section>
</div>

<script src="../scripts/main.js"></script>
</body>

</html>