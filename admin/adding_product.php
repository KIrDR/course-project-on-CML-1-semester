<?php 
$title="Добавление техники"; // название формы
require __DIR__ . '/header.php'; // подключаем шапку проекта
require "db.php"; // подключаем файл для соединения с БД

if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы

	$id = $_GET['del_id'];
    $delproduct = R::load('product', $id);
    R::trash($delproduct);
  }

// Создаем переменную для сбора данных от пользователя по методу POST
$data = $_POST;

// Пользователь нажимает на кнопку "Зарегистрировать" и код начинает выполняться
if(isset($data['add_product'])) {

        // Регистрируем
    // Создаем массив для сбора ошибок
	$errors = array();

	// Проводим проверки
        // trim — удаляет пробелы (или другие символы) из начала и конца строки
	if(trim($data['name']) == '') {

		$errors[] = "Введите название товара!";
	}

	if(trim($data['type']) == '') {

		$errors[] = "Введите вид техники";
	}

	if ($data['type'] == 'Работа' || $data['type'] == 'работа')	{

		$data['type'] = 'Работа';
		$data['type_n'] = '1';
	}

	if ($data['type'] == 'Игры' || $data['type'] == 'игры')	{

		$data['type'] = 'Игры';
		$data['type_n'] = '2';
	}

	if ($data['type'] == 'Повседневное использование' || $data['type'] == 'повседневное использование')	{

		$data['type'] = 'Повседневное использование';
		$data['type_n'] = '3';
	}

	if ($data['type'] == 'Будущие' || $data['type'] == 'будущие')	{

		$data['type'] = 'Будущие';
		$data['type_n'] = '4';
	}

	if ($data['type'] != 'Будущие' && $data['type'] != 'Повседневное использование' && $data['type'] != 'Игры' && $data['type'] != 'Работа')	{
		
		$errors[] = "Такая техника не производиться!";
	}

	if(trim($data['description']) == '') {

		$errors[] = "Введите краткое описание для товара";
	}

	if(trim($data['full_description']) == '') {

		$errors[] = "Введите фамилию";
	}

	if($data['price'] == '') {

		$errors[] = "Введите цену";
	}

	if($data['size'] == '') {

		$errors[] = "Введите размер ноутбука";
	}

	if($data['weight'] == '') {

		$errors[] = "Введите вес упаковки";
	}

	if($data['shelf_life'] == '') {

		$errors[] = "Введите дату изготовления";
	}

	if($data['picture'] == '') {

		$errors[] = "Введите название файла-картинки";
	}

	if($data['picture'] != '') {
		$temp = $data['picture'];
		$data['picture'] = "../k-store/uploads/uploads/image/product/";
		$data['picture'] .= $temp;
	}

	if($data['in_stock'] != '1' && $data['in_stock'] != '0') {

		$errors[] = "есть в наличие? (1/0)";
	}

	$data['date_if_introduction'] = date("Y-m-d");

         // функция mb_strlen - получает длину строки
        // Если логин будет меньше 5 символов и больше 90, то выйдет ошибка
	if(mb_strlen($data['name']) < 5 || mb_strlen($data['name']) > 101) {

	    $errors[] = "Недопустимая длина имени";

    }

    if (mb_strlen($data['type']) < 3 || mb_strlen($data['type']) > 101){
	    
	    $errors[] = "Недопустимая длина вида техники";

    }

    if (mb_strlen($data['description']) < 5 || mb_strlen($data['description']) > 1001){
	    
	    $errors[] = "Недопустимая длина краткого описания";

    }

    if (mb_strlen($data['full_description']) < 5 || mb_strlen($data['full_description']) > 2001){
	    
	    $errors[] = "Недопустимая длина описания";

    }

	// Проверка на уникальность товара
	if(R::count('product', "name = ?", array($data['name'])) > 0) {

		$errors[] = "Такой товар существует!";
	}

	if(empty($errors)) {

		// Все проверено, добавляем
		// Создаем таблицу product
		$product = R::dispense('product');

                // добавляем в таблицу записи
		$product->name = $data['name'];
		$product->type_n = $data['type_n'];
		$product->type = $data['type'];
		$product->description = $data['description'];
		$product->full_description = $data['full_description'];
		$product->price = $data['price'];
		$product->size = $data['size'];
		$product->weight = $data['weight'];
		$product->shelf_life = $data['shelf_life'];
		$product->picture = $data['picture'];
		$product->in_stock = $data['in_stock'];
		$product->date_if_introduction = $data['date_if_introduction'];

		// Сохраняем таблицу
		R::store($product);
        echo '<div style="color: green; ">Вы успешно добавили товар!</div><hr>';

	} else {
                // array_shift() извлекает первое значение массива array и возвращает его, сокращая размер array на один элемент. 
		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preload" href="../k-store/static/fonts/ElegantIcons.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../k-store/static/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Regular.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Medium.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../k-store/static/fonts/Cera%20Pro%20Bold.woff" as="font" type="font/woff" crossorigin>
      <link rel="preload" href="../k-store/static/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style-product2.css">
<link rel="stylesheet" href="../k-store/static/css/packedmin_all_css.css">
	<title>Document</title>
</head>
<body>
<header>  

<h1 align="center">Добро пожаловать в панель администратора!</h1>
		<div class="header-block d-flex align-items-center">
		   <div class="container">
			  <div class="row"><p align = "center">Магазин Техники “k-store”<br>
<?php if(isset($_SESSION['logged_user'])) : ?>
  Привет, <?php echo $_SESSION['logged_user']->name; ?><br>

<!-- Пользователь может нажать выйти для выхода из системы -->
<a href="logout.php">Выйти</a></p>
<?php endif; ?>
			  </div>
		   </div>
		</div>
		<nav class="navigation d-flex align-items-center">
		   <div class="container">
			  <div class="row" style="justify-content:center">
				 <div class="col-8">
					<div class="navgition-menu d-flex align-items-center justify-content-center">
					   <ul class="mb-0">
						  <li class="toggleable">
							 <a class="menu-item" href="signup.php">Добавление нового пользователя</a>
						  </li>
						  <li class="toggleable">
							 <a class="menu-item" href="index.php">Главная</a>
						  </li>
						  <li class="toggleable">
							 <a class="menu-item" href="table_page.php">Таблица с техникой</a>
						  </li>
					   </ul>
					</div>
				 </div>
			  </div>
		   </div>
		</nav>
</header>
<div class="container mt-4" style="justify-content: center !important; max-width: 540px;" >
		
	   <!-- Форма регистрации -->
		<h2 align="center">Форма добавления нового товара</h2><br>
		<form action="adding_product.php" method="post"> 
		<div style="justify-content: center;">
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите название товара"><br>
			<input type="text" class="form-control" name="type" id="type" placeholder="Введите вид техники"><br>
			<input type="text" class="form-control" name="description" id="description" placeholder="Введите краткое описание"><br>
			<input type="text" class="form-control" name="full_description" id="full_description" placeholder="Введите полное описание"><br>
			<input type="text" class="form-control" name="price" id="price" placeholder="Введите цену"><br>
			<input type="text" class="form-control" name="size" id="size" placeholder="Введите размер техники"><br>
			<input type="text" class="form-control" name="weight" id="weight" placeholder="Введите вес упаковки"><br>
			<input type="text" class="form-control" name="shelf_life" id="shelf_life" placeholder="Введите дату изготовления"><br>
			<input type="text" class="form-control" name="picture" id="picture" placeholder="Название файла-картинки"><br>
			<input type="text" class="form-control" name="in_stock" id="in_stock" placeholder="есть в наличие? (1/0)"><br>
			
			<div style="margin-left: 35%;">
			<button class="no-round-btn btn-success" name="add_product" type="submit">Добавить</button>
   			</div>
		</div>
		</form>
		<br>
</div>

<?php require __DIR__ . '/footer.php'; ?> <!-- Подключаем подвал проекта -->
</body>
</html>