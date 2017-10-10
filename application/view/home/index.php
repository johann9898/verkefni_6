<div class="container">
<div id="result">
    <?php
    if (!empty($array)) {
        foreach ($array['results'] as $item) {
            echo '<img id="img" src="' . $item['imageSource'] . '" alt=""/><br/>';
        }
    }
    ?>
</div>
</div>
