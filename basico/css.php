<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
    echo 'Olá';
    echo '<small>';
    echo ' Mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'!</div>" ?>

<div center><button dobro><?= 'Legal' ?> </button></div>

<style>
    button {
        padding: 5px <?= 2*10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    <?="[azul]"?> {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>