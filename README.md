fusion.onlineusers
===================

Компонент и гаджет для CMS 1С-Битрикс, отображающий список и количество пользователей online на корпоративном портале.
Для работы компонента необходим установленный модуль "Веб мессенджер (im)"

**Использование:**

```php
	$APPLICATION->IncludeComponent(
		"fusion:intranet.structure.list.online",
		"",
		Array(
		),
	false
	);
```

**Гаджет**
Для гаджета указать в параметрах ссылку на список пользователей online (компонент fusion:intranet.structure.list.online), по умолчанию указан путь

```php

```