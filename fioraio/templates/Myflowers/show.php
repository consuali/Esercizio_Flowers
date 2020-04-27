<style>
.flowerbox {
    border: 1px solid burlywood;
    width: 20em;
    margin: 1em;
    padding: 1em;
}

.container {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

</style>

<div class="container">
<?php
foreach($fiori as $fiore){ ?>

<div class="flowerbox">

<h2><?= $fiore->name ?></h2>
<p>Per la tua occasione speciale!</p> 
<details>
<summary>
<?= $fiore->occasion->name ?></summary>
<quote><?=  $fiore->occasion->description ?></quote>
</details>
<p>Prezzo: <?= $fiore->price ?></p>
<p>Pezzi: <?= $fiore->qty ?></p>

</div>

<?php } ?>
    


