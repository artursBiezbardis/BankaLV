<?php foreach ($showCurrencies as $item): ?>
    <li><?php echo $item['name'] . ' ' . $item['price']; ?></li>
<?php endforeach; ?>