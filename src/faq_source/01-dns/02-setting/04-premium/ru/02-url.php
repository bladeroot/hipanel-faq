<?php

$this->title = 'URL переадресация';

?>

<p>
    Чтобы настроить URL переадресацию в панеле <?= $options['host'] ?>, следует установить наши NS-сервера.
</p>
<p>
    <a href="#01-installing">Установка NS-серверов <?= $options['host'] ?></a>.
</p>
<p>
    Перейдите в настройки нужного домена и при необходимости активируйте "Премиум пакет".
</p>
<p>
    <img src="<?= $options['imgDir'] ?>/help/dns/setup/ru/premium_1.jpg">
</p>
<p>
    После этого Вы сможете настроить перенаправление со своего домена на любой существующий сайт. Также можно настроить перенаправление для поддоменов, или использовать символ "*" для обозначения поддомена. "Адрес перенаправления" поддерживает ввод get ссылки вида http://name/.
</p>
<p>
    <img src="<?= $options['imgDir'] ?>/help/dns/setup/ru/url_redirect_1.jpg">
</p>
<p>
    Для переадресации URL также доступна настройка типа перенаправления: 301 — перемещён постоянно, 302 — перемещён временно.
</p>
