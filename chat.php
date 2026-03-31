<?php
session_start();

// Файл для хранения сообщений
$logfile = __DIR__ . '/messages.log';

// Логаут
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Вход: задаём ник
if (!isset($_SESSION['username'])) {
    if (isset($_POST['username']) && trim($_POST['username']) !== '') {
        $_SESSION['username'] = trim($_POST['username']);
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Вход в чат</title>
            <meta charset="utf-8">
        </head>
        <body>
            <h2>Введите имя пользователя</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Ваше имя" required>
                <input type="submit" value="Войти">
            </form>
        </body>
        </html>
        <?php
        exit;
    }
}

// Отправка сообщения
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $message = trim($_POST['message']);
    if ($message !== '') {
        $time   = date('H:i:s');
        $user   = $_SESSION['username'];
        $record = sprintf("%s\t%s\t%s\n", $time, $user, $message);

        $result = file_put_contents($logfile, $record, FILE_APPEND | LOCK_EX);
        if ($result === false) {
            die('Ошибка записи сообщения (файл не доступен)');
        }
    }

    // ВАЖНО: НИЧЕГО НЕ ВЫВОДИМ ДО header()
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

// Читаем последние сообщения
$max_lines = 50;
$lines     = [];

if (file_exists($logfile)) {
    $all = file($logfile, FILE_IGNORE_NEW_LINES);
    if (count($all) > $max_lines) {
        $all = array_slice($all, -$max_lines);
    }
    foreach ($all as $line) {
        $parts = explode("\t", $line, 3);
        if (count($parts) === 3) {
            $lines[] = [
                'time' => $parts[0],
                'user' => $parts[1],
                'msg'  => $parts[2],
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Чат на PHP</title>
    <meta charset="utf-8">
    <style>
        body { font-family: sans-serif; }
        #chat {
            width: 400px;
            max-height: 400px;
            border: 1px solid #ccc;
            padding: 10px;
            overflow-y: auto;
            margin-bottom: 10px;
        }
        .message {
            margin-bottom: 4px;
            font-size: 14px;
        }
        .user {
            font-weight: bold;
            color: #333;
        }
        .time {
            font-size: 11px;
            color: #777;
        }
    </style>
</head>
<body>
    <h2>Чат (пользователь: <?= htmlspecialchars($_SESSION['username']) ?>)</h2>

    <div id="chat">
        <?php foreach ($lines as $item): ?>
            <div class="message">
                <span class="time"><?= htmlspecialchars($item['time']) ?></span> &nbsp;
                <span class="user"><?= htmlspecialchars($item['user']) ?>:</span>
                <span><?= htmlspecialchars($item['msg']) ?></span>
            </div>
        <?php endforeach; ?>
    </div>

    <form method="post" style="display: flex; gap: 5px;">
        <input type="text" name="message" placeholder="Введите сообщение" required style="flex: 1;">
        <button type="submit">Отправить</button>
    </form>

    <script>
        function loadMessages() {
            fetch('chat_fetch.php')
                .then(res => res.json())
                .then(data => {
                    const chat = document.getElementById('chat');
                    chat.innerHTML = '';

                    data.messages.forEach(item => {
                        const div = document.createElement('div');
                        div.className = 'message';
                        div.innerHTML = `
                            <span class="time">${item.time}</span> &nbsp;
                            <span class="user">${item.user}:</span>
                            ${item.msg}
                        `;
                        chat.appendChild(div);
                    });
                    chat.scrollTop = chat.scrollHeight;
                });
        }

        setInterval(loadMessages, 1500);
        loadMessages();
    </script>

    <p><a href="?logout">Выйти</a></p>
</body>
</html>