<?php
    $host = 'localhost:12345';
    $dbname = 'lb_filaments';
    $username = 'filaments';
    $password = 'Qs123456';
    try
    {
        $pdo1 = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        die("Ошибка подключения к базе данных: " . $e->getMessage());
    }
    $stmt1 = $pdo1->query(file_get_contents("SOURCES/SCRIPTS/SQL/lb_filaments_view_tier_list.sql"));
    $data1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
?>
            <div class="lb_content_title center">Тир - лист филаментов</div>
            <div class="lb_content">
<?php if (!empty($data1)): ?>
                <table>
                    <thead>
                        <tr>
                            <!--<th>ID</th>-->
                            <th>Тип принтера</th>
                            <th>Тир</th>
                            <th>Производитель</th>
                            <th>Тип филамента</th>
                            <th>Модификация филамента</th>
                            <th>Цвет</th>
                            <th>Описание</th>
                        </tr>
                    </thead>
                    <tbody>
<?php foreach ($data1 as $item1): ?>
                        <tr>
                            <!--<td><?= htmlspecialchars($item1['ID']) ?></td>-->
                            <td><?= htmlspecialchars($item1['Printer type']) ?></td>
                            <td><?= htmlspecialchars($item1['Tier']) ?></td>
                            <td><?= htmlspecialchars($item1['Manufacturer']) ?></td>
                            <td><?= htmlspecialchars($item1['Filament type']) ?></td>
                            <td><?= htmlspecialchars($item1['Filament mod']) ?></td>
                            <td><?= htmlspecialchars($item1['Color']) ?></td>
                            <td><?= htmlspecialchars($item1['Description']) ?></td>
                        </tr>
<?php endforeach; ?>
                    </tbody>
                </table>
<?php else: ?>
                <p>Нет данных для отображения.</p>
<?php endif; ?>
            </div>
