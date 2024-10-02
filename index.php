<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мобільні оператори</title>
</head>
<body>
    <h1>Мобільні оператори</h1>

    <?php
    // Інформація про розробника
    echo "<p><strong>Розробник:</strong> Іваненко Іван Іванович</p>";
    echo "<p><strong>Група:</strong> ІТ-12</p>";
    echo "<p><strong>Дата створення:</strong> 2 жовтня 2024</p>";
    echo "<p><strong>Поточна дата:</strong> " . date('d-m-Y') . "</p>";
    
    // Перша буква оператора
    $operator_letter = 'K'; // Заміни цю змінну на потрібну букву
    
    // Класичний варіант switch-case
    switch ($operator_letter) {
        case 'K':
            echo "<p>Оператор: Київстар</p>";
            break;
        case 'V':
            echo "<p>Оператор: Vodafone</p>";
            break;
        case 'L':
            echo "<p>Оператор: Lifecell</p>";
            break;
        default:
            echo "<p>Оператор не знайдений</p>";
            break;
    }

    // Альтернативний варіант запису switch-case
    echo "<h2>Альтернативний варіант:</h2>";
    switch ($operator_letter):
        case 'K':
            echo "<p>Оператор: Київстар</p>";
            break;
        case 'V':
            echo "<p>Оператор: Vodafone</p>";
            break;
        case 'L':
            echo "<p>Оператор: Lifecell</p>";
            break;
        default:
            echo "<p>Оператор не знайдений</p>";
    endswitch;
    ?>

</body>
</html>
