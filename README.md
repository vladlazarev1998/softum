Скачать себе репозиторий:
<pre>git clone https://github.com/vladlazarev1998/softum</pre>

Скопировать env
<pre>cp .env.example .env</pre>

Установить зависимости
<pre>composer i</pre>
<pre>npm i</pre>

Сгенерировать ключ
<pre>php artisan key:generate</pre>

Сгенерировать css, js
<pre>npm run build</pre>

### Настоить env

Изменить настройки подключения к БД
<pre>
DB_DATABASE
DB_USERNAME
DB_PASSWORD
</pre>

Изменить настройки SMTP
<pre>
MAIL_MAILER
MAIL_HOST
MAIL_PORT
MAIL_USERNAME
MAIL_PASSWORD
MAIL_ENCRYPTION
</pre>

Запустить миграции
<pre>php artisan migrate</pre>
