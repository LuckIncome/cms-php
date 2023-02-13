![Cms-Example-description-Cms](https://user-images.githubusercontent.com/54973796/218568036-4920f3c1-b387-4b67-a44a-08c7890105b6.png)

![Админ-панель](https://user-images.githubusercontent.com/54973796/218568178-6c558852-eb7e-47e8-9e04-b6f1ce174d1c.png)

## Требования

        *  PHP 7.2
        *  MySQL 5.7
        *  Apache 2.4

## Установка

```bash
    
    # Создайте БД названием "cms"

    # Импортируйте файл "cms.sql"

    # Напишите свои настройки БД в файле:
    /admin/Config/database.php
    /cms/Config/database.php
    <?php

    return [
        'host'     => 'localhost',
        'db_name'  => 'cms',
        'username' => 'root',
        'password' => '',
        'charset'  => 'utf8',
    ];

```

## Админка

<table>
        <thead>
            <th>URL</th>
            <th>Логин</th>
            <th>Пароль</th>
        </thead>
    <tbody>
        <tr> 
            <td> /admin/login </td>
            <td>admin@admin.com</td>
            <td> 123 </td>
        </tr>
    </tbody>
</table>
