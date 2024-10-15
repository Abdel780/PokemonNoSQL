<?php
require_once(__DIR__. "/../partials/head.php");
?>
<h1>Ajouter un Pokemon</h1>
<form method="POST">
    <div>
        <label for="name">Nom du Pokémon</label>
        <input type="text" name="name">
        <?php if (isset($this->arrayError['name'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['name'] ?></p>
                <?php
                } ?>
    </div>
    <div>
        <label for="type">Type du Pokémon</label>
        <input type="text" name="type">
        <?php if (isset($this->arrayError['type'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['type'] ?></p>
                <?php
                } ?>
    </div>
    <div>
        <label for="level">Lvl du Pokémon</label>
        <input type="number" name="level">
        <?php if (isset($this->arrayError['level'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['level'] ?></p>
                <?php
                } ?>
    </div>
    <div>
        <label for="description">Descirption du pokémon</label>
        <input type="text" name="description">
        <?php if (isset($this->arrayError['description'])) {
                ?>
                    <p class='text-danger'><?= $this->arrayError['description'] ?></p>
                <?php
                } ?>
    </div>
    <button type="submit">Ajoutez</button>
</form>
<?php
require_once(__DIR__. "/../partials/footer.php");
?>