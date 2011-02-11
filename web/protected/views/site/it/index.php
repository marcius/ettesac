<?php
$this->pageTitle = Yii::app()->name;
$cs = Yii::app()->clientScript;
$cs->registerCoreScript('jquery');
$cs->registerLinkTag('stylesheet', 'text/css', 'js/nivo-slider/nivo-slider.css', 'screen');
$cs->registerLinkTag('stylesheet', 'text/css', 'js/nivo-slider/nivo2.css', 'screen');
?>
<div class="span-8">
    <div id="casette" class="box roundBox last">
        Le casette di Lulù sono tre accoglienti bilocali indipendenti, ideati per offrirvi massimo comfort e tranquillità durante il vostro soggiorno.
        <br/><br/>Sono moderne e funzionali, ed al tempo stesso sono arredate con gusto ed attenzione, ciascuna con un proprio stile.
        <br/><br/>La struttura è ubicata in una zona centralissima della città, a pochi minuti dal centro storico e dalla zona commerciale.
        <br/><br/>Gestiamo le casette con cortesia e professionalità, mantenendo l'impronta della nostra cultura mediterranea: accoglienza, calore e disponibilità.
    </div>
</div>
<div class="span-16 last">
    <div id="slider2" class="nivoSlider">
        <a href="#link1"><img width="630" src="/images/a_cucina.png" alt="" /></a>
        <a href="#link2"><img width="630" src="images/a_divano.png" alt="" /></a>
        <a href="#link3"><img width="630" src="images/a_letto.png" alt="" /></a>
        <a href="#link4"><img width="630" src="images/b_cucina.png" alt="" /></a>
        <a href="#link5"><img width="630" src="images/b_letto.png" alt="" /></a>
        <a href="#link6"><img width="630" src="images/c_cucina.png" alt="" /></a>
        <a href="#link7"><img width="630" src="images/c_divano.png" alt="" /></a>
    </div>
</div>

<!--
<p>default</p>
<p>Le casette di Lulù tre accoglienti bilocali indipendenti, ideati per offrirvi massimo comfort e tranquillità durante il vostro soggiorno. Sono moderne e funzionali, ed al tempo stesso sono arredate con gusto ed attenzione, ciascuna con un proprio stile.</p>
<p>La struttura è ubicata in una zona centralissima della città, a pochi minuti dal centro storico e dalla zona commerciale.</p>
<p>A due passi dalla Stazione Notarbartolo, risulta infatti comodissima per i collegamenti urbani e per il raggiungimento della Stazione Centrale e dell'aeroporto. L'ubicazione ed i comfort offerti le rendono ideali per ogni tipo di viaggiatore, sia che siate turisti che professionisti in viaggio di lavoro.</p>
<p>Ogni casetta comprende una camera da letto, un soggiorno letto con cucina attrezzata ed un bagno privato; è dotata di aria condizionata, riscaldamento autonomo, frigorifero, TV e collegamento ad Internet. Le camere sono ampie e luminose, tutte dotate di balcone ed affacciano su zone tranquille e silenziose. Sono adatte ad ospitare da 1 a 4 persone, sia per visite di pochi giorni che per permanenze un po' più lunghe.</p>
<p>Sono gestite in un clima di cortesia e professionalità, mantenendo l'impronta della nostra cultura mediterranea: accoglienza, calore e disponibilità.</p>
<p>Garantiamo libertà ed autonomia nell'organizzazione del vostro soggiorno, ma se lo preferite, saremo lieti di darvi ottimi consigli sulla scelta di itinerari, locali e piccole dritte per vivere la città al meglio.</p>
<p>Per assaporare immediatamente i sapori della nostra terra, troverete nel vostro frigorifero qualche assaggio di alcune delle nostre specialità siciliane, come il limoncello e le paste di mandorla, rigorosamente fatti in casa.</p>
-->
<!-- script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script-->
<script src="js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider2').nivoSlider({ pauseTime:5000, controlNav:false, pauseOnHover:false });
    });
</script>
