<?php
$links = [
    ['name' => 'Google', 'url' => 'https://google.com'],
    ['name' => 'Yandex', 'url' => 'https://yandex.com'],
    ['name' => 'Bingo', 'url' => 'https://bingo.com']
];
foreach($links as $link) : ?>
<div>
<a href="<?= $link['url'] ?>"><?= $link['name'] ?></a>
</div>
<?php endforeach; ?>
