
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задание 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header, footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        nav {
            background-color: #444;
            padding: 0.5rem;
        }
        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }
        .gallery img {
            margin: 10px;
            border: 2px solid #ddd;
            max-width: 200px;
            max-height: 200px;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    
    <header>
        <h1>Задание 5: Работа с файловой системой</h1>
    </header>
    <nav>
        <a href="https://usm.md/">Главная</a>
        <a href="https://usm.md/">Галерея</a>
        <a href="https://usm.md/">О нас</a>
    </nav>

    <main>
        <div class="gallery">
            <?php
            // Задаем путь к папке с изображениями
            $dir = 'image/';
            // Сканируем содержимое директории
            // scandir — Получает список файлов и каталогов, расположенных по  указанному пути.
            // Возвращает array, содержащий имена файлов и каталогов, расположенных по  пути, переданному в параметре
            $files = scandir($dir);
                
            // Если нет ошибок при сканировании
            if ($files === false) {
                    return;
            }
                for ($i = 0; $i < count($files); $i++) {
                     // Пропускаем текущий каталог и родительский
                    if ($files[$i] != "." && $files[$i] != "..") {
                        // Получаем путь к изображению
                        $path = $dir . $files[$i];
                        $fileExt = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                      
                        if ($fileExt == 'jpg' || $fileExt == 'jpeg') {
                            echo '<img src="' . $path . '" alt="Изображение ' . ($i-1) . '">';
                        }
                    }
                }
            ?>
        </div>
    </main>

    <footer>
        <p>USM &copy; 2025 </p>
    </footer>
</body>
</html>




    