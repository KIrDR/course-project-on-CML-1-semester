-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 18 2022 г., 12:03
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `web`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type_n` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(2000) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `size` varchar(250) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `shelf_life` varchar(250) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `in_stock` tinyint(1) UNSIGNED DEFAULT NULL,
  `date_if_introduction` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `type_n`, `type`, `description`, `full_description`, `price`, `size`, `weight`, `shelf_life`, `picture`, `in_stock`, `date_if_introduction`) VALUES
(18, 'MacBook Pro', 1, 'Работа', '2021 Apple MacBook Pro (14-inch, Apple M1 Pro chip with 8‑core CPU and 14‑core GPU, 16GB RAM, 512GB SSD) - Silver', 'Чип Apple M1 Pro или M1 Max для значительного повышения производительности процессора, графического процессора и машинного обучения\r\n10-ядерный процессор обеспечивает производительность в 3,7 раза выше, что позволяет выполнять профессиональные рабочие процессы быстрее, чем когда-либо\r\nДо 32-ядерного графического процессора с производительностью до 13 раз выше для приложений и игр с интенсивным использованием графики\r\n16-ядерный нейронный движок для повышения производительности машинного обучения в 11 раз\r\nБолее длительное время автономной работы - до 17 часов\r\nДо 64 ГБ объединенной памяти, так что все, что вы делаете, происходит быстро и плавно\r\nСверхбыстрое твердотельное хранилище объемом до 8 ТБ мгновенно запускает приложения и открывает файлы\r\nПотрясающий 14-дюймовый жидкокристаллический дисплей Retina XDR с экстремальным динамическим диапазоном и контрастностью\r\nкамера 1080p FaceTime HD с усовершенствованным процессором обработки сигналов изображения для более четких видеозвонков\r\nЗвуковая система с шестью динамиками и низкочастотными динамиками с принудительным шумоподавлением', '1939.00', '212 x 304', '1.2 кг', '2021', '../k-store/uploads/uploads/image/product/macbook-pro.png', 1, '2022-03-19'),
(20, 'MacBook Pro 2020', 1, 'Работа', '2020 Apple MacBook Pro with Apple M1 Chip (13-inch, 8GB RAM, 256GB SSD Storage) - Silver', 'Разработанный Apple чип M1 обеспечивает гигантский скачок в производительности процессора, графического процессора и машинного обучения Выполняйте больше за счет до 20 часов автономной работы, что является самым продолжительным за всю историю 8-ядерного процессора Mac, обеспечивающего производительность в 2,8 раза выше, что позволяет выполнять рабочие процессы быстрее, чем когда-либо 8-ядерный графический процессор с графикой до 5 раз быстрее для приложений и игр с интенсивным использованием графики 16-ядерный нейронный движок для продвинутого машинного обучения 8 ГБ единой памяти, так что все, что вы делаете, происходит быстро и плавно 13,3-дюймовый дисплей Retina с яркостью 500 нит обеспечивает яркие цвета и невероятную детализацию изображения HD-камера FaceTime с усовершенствованным процессором обработки сигналов изображения для более четких и четких видеозвонков', '1269.00', '212 x 304', '1.2 кг', '2020', '../k-store/uploads/uploads/image/product/mac.png', 0, '2022-03-18'),
(19, 'MacBook Air', 1, 'Работа', '2020 Apple MacBook Air Laptop: Apple M1 Chip, 13” Retina Display, 8GB RAM, 256GB SSD Storage', 'Время автономной работы в течение всего дня – Работает дольше, чем когда-либо, до 18 часов автономной работы. Мощная производительность – С легкостью беритесь за все, от редактирования профессионального качества до захватывающих игр. Чип Apple M1 с 8-ядерным процессором обеспечивает производительность в 3,5 раза выше, чем у предыдущего поколения, при этом потребляя значительно меньше энергии. Сверхбыстрая память – 8 ГБ унифицированной памяти делают всю вашу систему быстрой и отзывчивой. Таким образом, он может быстро и легко поддерживать такие задачи, как загрузка памяти, просмотр нескольких вкладок и открытие огромного графического файла. Потрясающий дисплей – Благодаря 13,3”дюймовому дисплею Retina изображения оживают с новыми уровнями реалистичности. Текст четкий и четкий, а цвета более яркие. Почему Mac – Прост в освоении. И он отлично работает со всеми вашими устройствами Apple. Используйте свой iPad, чтобы расширить рабочее пространство вашего Mac, отвечать на текстовые сообщения и телефонные звонки непосредственно на вашем Mac и многое другое. Дизайн без вентилятора – Ваш MacBook Air остается прохладным и работает тихо даже при интенсивных рабочих нагрузках. AppleCare – На каждый компьютер Mac предоставляется ограниченная гарантия сроком на один год и бесплатная техническая поддержка сроком до 90 дней. Получите AppleCare +, чтобы расширить свое покрытие и снизить стресс и затраты на непредвиденный ремонт. Экологически чистый – MacBook Air изготовлен из 100% переработанного алюминиевого корпуса и потребляет меньше энергии при меньшем углеродном следе.', '974.00', '212 x 304', '1.2 кг', '2020', '../k-store/uploads/uploads/image/product/macbook-air.png', 1, '2022-03-18'),
(21, 'Acer Predator Helios', 2, 'Игры', 'Acer Predator Helios 300 PH315-54-760S Gaming Laptop | Intel i7-11800H | NVIDIA GeForce RTX 3060 Laptop GPU', 'Экстремальная производительность: Сокрушите конкурентов благодаря впечатляющей мощности и скорости процессора Intel Core i7-11800H 11-го поколения с 8 ядрами и 16 потоками, позволяющими разделять и решать любые задачи или запускать самые интенсивные игры. RTX, он включен: Новейшая видеокарта NVIDIA GeForce RTX 3060 (6 ГБ выделенной видеопамяти GDDR6) оснащена отмеченной наградами архитектурой Ampere с новыми ядрами трассировки лучей, тензорными ядрами и потоковыми мультипроцессорами, поддерживающими DirectX 12 Ultimate для максимальной производительности в играх Невероятно быстрый дисплей: Этот 15,6-дюймовый дисплей Full HD (1920 x 1080) IPS со светодиодной подсветкой с соотношением сторон 16: 9 отличается невероятно высокой частотой обновления 144 Гц и временем отклика на перегрузку 3 мс для геймеров, которым требуются наилучшие визуальные впечатления. Внутренние характеристики: Память 16 ГБ DDR4 3200 МГц (Всего 2 Слота DDR4, Максимум 32 ГБ); Твердотельный накопитель 512 ГБ PCIe Gen 4 (Доступно 2 Слота PCIe M.2 / 1 отсек для жесткого Диска 2,5 Дюйма) Расставьте приоритеты в своем игровом процессе: Intel Killer DoubleShot Pro с Ethernet E2600 и Wi-Fi 6 AX1650i позволяет одновременно использовать Wi-Fi и Ethernet и полностью контролировать приоритетный трафик, чтобы максимизировать скорость, пропускную способность и контроль Улучшенное охлаждение: В Acer Helios 300 используется вентилятор AeroBlade 5-го поколения с 89 лопастями, предназначенный для увеличения всасывания воздуха и поддержания в вашей системе приятной прохладной температуры. Кроме того, это позволяет вам максимизировать производительность за счет уменьшения регулирования для повышения устойчивой производительности. В режиме Alexa Show вы можете использовать свой компьютер в качестве полноэкранного интерактивного интерфейса с богатыми визуальными эффектами и разговаривать с Alexa из другого конца комнаты.', '1249.00', '361 x 254', '2.5 кг', '2021', '../k-store/uploads/uploads/image/product/Acer-Predator-Helios.png', 1, '2022-03-18'),
(22, 'MSI GS75 Stealth', 2, 'Игры', 'MSI GS75 Stealth Gaming Laptop: 17.3\" 240Hz Display, Intel Core i7-10875H, NVIDIA GeForce RTX 2060, 16GB RAM', 'Плавный дисплей: 17,3-дюймовый дисплей с частотой 240 Гц обеспечивает высокую частоту обновления для плавного и яркого игрового процесса, так что вы не пропустите ни одного кадра игры. Включено: 10-е Поколение. Процессор Intel Core i7 обеспечивает высокую производительность вычислительной мощности, обеспечивая вам непревзойденный игровой опыт Улучшенная графика: RTX 2060 оснащен функцией трассировки лучей для создания физически точных теней, отражений и освещения для улучшения визуального игрового процесса. Играйте круто: Благодаря технологии охлаждения процессора и графического процессора для максимального увеличения воздушного потока и тепловыделения для плавной игры и производительности в компактном корпусе. Скорость молнии: Оснащенный портом Thunderbolt 3, обеспечивает скорость передачи данных до 40 Гбит / с и мощность до 100 Вт для более быстрой зарядки.', '1469.00', '396 x 259', '2.3 кг', '2020', '../k-store/uploads/uploads/image/product/MSI-GS75-Stealth.png', 0, '2022-03-18'),
(23, 'Lenovo Yoga', 3, 'Повседневное ипользование', '2020 Lenovo Yoga C740 2-in-1 14\" Full HD 1080p Touchscreen Laptop PC, Intel Core i5-10210U Quad Core Processor', 'Windows 10 Home, Сенсорный экран 2 в 1 с диагональю 14 дюймов 1920 x 1080 FHD Intel 10-го поколения Core i5-10210U 1,6 ГГц 8 ГБ DDR4 2666 МГц, 6 МБ Кэш-памяти, 256 ГБ SSD, Intel HD Graphics 1xUSB 3.0 Порты типа A, 2x USB 3.1 Порты типа C, 1x комбинированный разъем для наушников / микрофона Клавиатура с подсветкой, считыватель отпечатков пальцев, 4-элементный литий-ионный аккумулятор, привод DVD / CD в комплект не входит', '669.00', '322 x 223', '1.5 кг', '2015', '../k-store/uploads/uploads/image/product/Lenovo-Yoga.png', 0, '2022-03-18'),
(24, 'Newest HP', 3, 'Повседневное ипользование', '2022 Newest HP Notebook Laptop, 17.3\" Full HD Non-Touch Display, 11th Gen Intel Core i5-1135G7 Processor', '【Память и хранилище】 Память - это 16 ГБ оперативной памяти с высокой пропускной способностью для плавного запуска нескольких приложений и вкладок браузера одновременно. Жесткий диск представляет собой твердотельный накопитель PCIe NVMe M.2 емкостью 512 ГБ, который обеспечивает быструю загрузку и передачу данных, а также жесткий диск емкостью 1 ТБ для достаточного места для хранения 【Процессор】 Четырехъядерный процессор Intel Core i5-1135G7 11-го поколения с частотой 2,40 ГГц (кэш 8 МБ, до 4,20 ГГц), графика Intel Iris Xe 【Экран】 17,3-дюймовый бесконтактный дисплей Full HD (1920 x 1080) 【Порты】 2 x USB 3.0 Type A, 1 x USB 2.0 Type-A, 1 x HDMI, 1 x порт Ethernet, 1 x комбинация наушников / микрофона; Беспроводная связь -AC Wi-Fi 5 и Bluetooth 4.2 Комбинированная', '799.00', '375 x 245', '1.7 кг', '2022', '../k-store/uploads/uploads/image/product/Newest-HP.png', 1, '2022-03-18'),
(25, 'Newest HP Pavilion', 1, 'Работа', '[Windows 11 Pro] Newest HP Pavilion 15 Laptop | 15.6\" Full HD IPS Micro-Edge Display', '【15,6-дюймовый дисплей с разрешением FHD IPS micro-edge】 Сверхширокие углы обзора 178 градусов с постоянной детализацией и ярким разрешением 1920 x 1080, вы всегда будете иметь отличный обзор вашего любимого контента. 【AMD Ryzen 7 5700U】Расширьте возможности настольных компьютеров с процессорами AMD Ryzen 7. Их смелая новая архитектура обеспечивает интуитивно понятное охлаждение и многоядерную обработку для игр, потоковой передачи, творчества, виртуальной реальности и многого другого. 【Обновление до 32 ГБ оперативной памяти DDR4】 Получите максимальную производительность вашего ноутбука с поддержкой новейшей памяти DDR4-3200. Наслаждайтесь более высокой скоростью и отзывчивостью системы, новый стандарт выведет ваш игровой опыт на новый уровень. 【Обновленное хранилище до 1 ТБ PCIe SSD】 Обеспечивает огромное пространство для хранения огромных файлов, так что вы можете хранить важные цифровые данные и легко просматривать их. Это дает вам огромное пространство для сохранения всех ваших файлов. 【Быстрая зарядка и аксессуары】 Зарядитесь от 0 до 50% примерно за 45 минут. Аксессуары Ghost Manta Включают в себя 1 Кабель HDMI, 1 удлинитель USB, 1 Коврик для мыши.', '1239.00', '380 x 253', '1.7 кг', '2022', '../k-store/uploads/uploads/image/product/Newest-HP-Pavilion.png', 1, '2022-03-18'),
(26, 'Lenovo Legion', 2, 'Игры', 'Lenovo Legion 7i Gaming Laptop, 15.6\" Full HD 240Hz Screen', '【Процессор AMD Ryzen 5 5600H】 Шестиядерный, базовая частота 3,3 ГГц, до 4,2 ГГц. 16 МБ. Этот игровой ноутбук IdeaPad, оснащенный революционным мобильным процессором AMD Ryzen 5000 серии H, обеспечивает непревзойденные результаты. Благодаря 6 сверхчувствительным ядрам это новый стандарт игровой производительности в инновационных, тонких и легких ноутбуках. 【17,3” FHD IPS дисплей】 17,3” Full HD (1920x1080) IPS Дисплей с антибликовым покрытием; Wi-Fi 802.11ax, Bluetooth 5.0; Точность цветопередачи NTSC 72%; 3D Dolby audio; 【NVIDIA GeForce GTX 1650】 Наслаждайтесь непревзойденной графикой GeForce и невероятно элегантным дизайном с графикой NVIDIA GTX, разработанной для обеспечения необходимой игровой производительности в тонком и легком форм-факторе. 【Windows 11 home】Благодаря новому ощущению и инструментам, которые облегчают эффективность, в нем есть все, что вам нужно для того, что будет дальше. 【Обновлено до 16 ГБ оперативной памяти и 1 ТБ NVMe SSD】 Значительная оперативная память с высокой пропускной способностью для бесперебойной работы ваших игр и приложений для редактирования фотографий и видео, а также нескольких программ и вкладок браузера одновременно.', '2499.00', '363 x 260', '2.4 кг ', '2021', '../k-store/uploads/uploads/image/product/Lenovo-Legion.png', 0, '2022-03-18'),
(27, 'ASUS ZenBook Pro Duo', 1, 'Работа', 'ASUS ZenBook Pro Duo 15 OLED UX582 Laptop', 'Screen Pad Plus: 14-дюймовый матовый сенсорный экран с разрешением 4K, позволяющий бесконечно оптимизировать работу в режиме многозадачности за счет расширения экрана или разделения окон и приложений на обоих дисплеях. 15,6-дюймовый OLED 4K UHD сенсорный экран NanoEdge с глянцевым основным дисплеем Новейший процессор Intel Core i7-10870H 10-го поколения (16 Мб кэш-памяти, до 5,0 ГГц, 8 ядер) с NVIDIA GeForce RTX 3070 Съемная подставка для ладоней и активный стилус ASUS входят в комплект поставки Быстрое хранилище и память с 1 ТБ твердотельного накопителя PCIe NVMe M.2 и 16 ГБ оперативной памяти DDR4 Поставляется с Windows 10 и бесплатным обновлением до Windows 11 (при наличии)', '2999.00', '359 x 249', '2.4 кг', '2021', '../k-store/uploads/uploads/image/product/ASUS-ZenBook-Pro-Duo.png', 1, '2022-03-19'),
(28, 'HP Flagship Pavilion', 3, 'Повседневное ипользование', 'HP 2022 Newest Pavilion X360 2-in-1 Convertible 14\" HD Touch-Screen Laptop', '【Процессор Intel 11th Core i5-1135G7】 Базовая частота 2,4 ГГц, до 4,2 ГГц. Системы на базе процессоров Intel Core 11-го поколения делают огромный шаг вперед в играх, потоковой передаче и творчестве, обеспечивая плавный, детализированный и яркий опыт на портативных устройствах. Интеллектуальная 4-ядерная 8-потоковая производительность обработки. Технология Intel Turbo Boost обеспечивает динамическую дополнительную мощность, когда она вам нужна, и одновременно повышает энергоэффективность, когда вы этого не делаете. 【Обновление до 16 ГБ памяти и 1 ТБ SSD-накопителя PCIe】 Значительная оперативная память с высокой пропускной способностью для бесперебойной работы ваших игр и приложений для редактирования фотографий и видео, а также нескольких программ и вкладок браузера одновременно. 【Дисплей】 14-дюймовый сенсорный экран FHD IPS Управляйте своими развлечениями прямо с экрана и получайте кристально чистое качество с широкими углами обзора 178 градусов. 【Конструкция шарнира с зубчатой передачей на 360 °】 Инновационная конструкция для поворота на 360 °, позволяющая использовать устройство в четырех режимах с едва заметной рамкой, революционизирует ваш дисплей, позволяя большему экрану вписываться в меньшую рамку 【Операционная система Windows 11 】 Windows 11 обладает всей мощью и безопасностью Windows 10 с переработанным и обновленным внешним видом. Он также поставляется с новыми инструментами, звуками и приложениями. Была продумана каждая деталь. Все это объединяется, чтобы обеспечить вам освежающий опыт работы на вашем компьютере', '519.00', '385 x 258', '1.6 кг', '2022', '../k-store/uploads/uploads/image/product/HP-Flagship-Pavilion.png', 0, '2022-03-18'),
(29, 'Acer Aspire', 1, 'Работа', 'Acer Aspire 5 A515-56-36UT, 15.6\" Full HD Display', '【Модернизированный мощный накопитель】 20 ГБ оперативной памяти DDR4, 512 ГБ NVMe SSD. Оперативная память обновлена до 20 ГБ оперативной памяти с высокой пропускной способностью для плавного запуска нескольких приложений и вкладок браузера одновременно; Жесткий диск обновлен до твердотельного накопителя объемом 512 ГБ, что позволяет быстро загружать и передавать данные. 【15,6” Дисплей Full HD】 15,6\" Full HD (1920 x 1080) широкоэкранный IPS-дисплей без сенсорной подсветки со светодиодной подсветкой с соотношением сторон экрана к корпусу 82,58%, соотношением сторон 16: 9 и узкими рамками 【Процессор AMD Ryzen 3 3350U】 Четырехъядерный процессор AMD Ryzen 3 3350U (Базовая частота 2,10 ГГц, Максимальная тактовая частота до 3,50 ГГц, 4 ядра, 4 МБ кэша, 4 потока). Идеальное сочетание производительности, энергопотребления и стоимости помогает вашему устройству работать бесперебойно. Графика AMD Radeon Vega 6 【Другие ключевые функции】 Клавиатура с подсветкой с цифровой клавиатурой, считыватель отпечатков пальцев, встроенная Alexa, технология Acer TrueHarmony и PurifiedVoice. До 10 часов автономной работы (смешанное использование), Realtek Wi-Fi 6 (1x2), Bluetooth 5.1, веб-камера 720p HD 【Режим Win 11 S】 Вы можете переключить режим win 11 S на обычный режим win 11: Обновите Microsoft App Store до последней версии. Нажмите кнопку \"Пуск\" в левом нижнем углу экрана; Выберите значок \"Настройки\" над значком \"Питание\"; Выберите Обновление и безопасность и активацию, затем перейдите в магазин; Выберите опцию \"Получить\" в разделе \"Выход из режима S\".', '365.00', '363 x 251', '1.7 кг', '2022', '../k-store/uploads/uploads/image/product/Acer-Aspire.png', 1, '2022-03-18'),
(30, 'ASUS VivoBook', 3, 'Повседневное ипользование', 'ASUS VivoBook 15 OLED K513 Thin & Light Laptop', '【Intel Core i3-1115G4 11-го поколения 】 Базовая частота 3 ГГц, до 4,1 ГГц благодаря технологии Intel Turbo Boost двухъядерный ноутбук 11-го поколения обладает идеальным сочетанием функций, которые сделают вас неудержимым. Это идеальный ноутбук для домашнего офиса, позволяющий быстро выполнять задачи с высокой производительностью, мгновенной реакцией и лучшими в своем классе возможностями подключения. Графика Intel UHD. 【14-дюймовый светодиодный дисплей Full HD (1920 x 1080)】 14-дюймовый дисплей FHD. Разрешение 1920 x 1080 может похвастаться впечатляющей цветопередачей и четкостью изображения. Энергоэффективная Светодиодная подсветка Со Считывателем Отпечатков Пальцев. 【Обновление до 12 ГБ системной памяти для расширенной многозадачности】 Значительная оперативная память с высокой пропускной способностью для бесперебойной работы ваших игр, приложений для редактирования фотографий и видео, а также нескольких программ и вкладок браузера одновременно. 【Обновление до твердотельного накопителя объемом 512 ГБ】 Загружайтесь за считанные секунды, быстрее получайте доступ к файлам и получайте место для загрузки файлов с помощью молниеносного твердотельного накопителя. Вы можете выйти из режима Windows 10 S в Windows 10 home. Windows 10 в режиме S предназначена для обеспечения безопасности и производительности, работает исключительно с приложениями из магазина Microsoft. Если вы хотите установить приложение, недоступное в магазине Microsoft Store, вам необходимо выйти из режима S. Переключение из режима S является односторонним. Если вы сделаете переключение, вы не сможете вернуться к Windows 10 в режиме S. За выход из режима S плата не взимается.', '859.00', '357 x 230', '1.7 кг', '2022', '../k-store/uploads/uploads/image/product/ASUS-VivoBook.png', 1, '2022-03-18'),
(31, 'MSI Modern 15A', 1, 'Работа', 'MSI Modern 15A Thin and Light Daily Laptop: 15.6\" FHD 1080p', 'Плавная Производительность: 11-Е Поколение. Процессор Intel Core i5 максимизирует вашу эффективность, многозадачность и производительность. Графика Iris Xe: Графика Intel Iris Xe обеспечивает производительность и надежность, повышая вашу производительность. Дисплей с тонкой рамкой: 15-дюймовый FHD-дисплей полностью расширяет ваш экран, повышая производительность и рабочий процесс. MSI Center: Выведите оптимизацию на новый уровень с помощью легко настраиваемых системных режимов и ресурсов для широкого спектра сценариев и потребностей. Аудио высокого разрешения: Благодаря возможности поддержки дискретизации до 24 бит / 192 кГц, слушайте звук так, как он был задуман на самом деле.', '849.00', '356 x 233', '1.6 кг', '2020', '../k-store/uploads/uploads/image/product/MSI-Modern-15A.png', 0, '2022-03-19'),
(32, 'Dell Inspiron', 1, 'Работа', 'Dell Inspiron 13.3\" Intel Evo Platform Laptop - 11th Gen Intel Core i5-11320H - FHD+ 1920 x 1200 Display', '【Память и хранилище 】 16 ГБ оперативной памяти с высокой пропускной способностью для плавного запуска нескольких приложений и вкладок браузера одновременно, твердотельный накопитель PCIe NVMe M.2 объемом 1 ТБ обеспечивает быструю загрузку, достаточно места для хранения и быструю передачу данных 【Дисплей 】 Яркий цвет с меньшим количеством синего света на 13,3-дюймовом 16: 10-дюймовом QHD ((2560 x 1600) с антибликовым покрытием, без касания, с узкой рамкой 300-битный дисплей WVA обеспечивает более четкие, четкие изображения и вмещает больше контента 【Мощный процессор i7 11-го поколения 】 Четырехъядерный процессор Intel Core i7-11370H 11-го поколения (4 ядра, 8 потоков, Базовая частота 3,30 ГГц, до 4,80 ГГц при максимальной скорости Turbo), Наслаждайтесь непревзойденной производительностью с четырехъядерным процессором Intel Core i7-11370H 11-го поколения, наслаждайтесь яркими цветами с NVIDIA GeForce MX450 с 2 ГБ графики GDDR6 【Другие 】 NVIDIA GeForce MX450 с 2 ГБ графической памяти GDDR6; 1 Порт USB Type-C Thunderbolt 4, 1 порт USB Type-C Thunderbolt 4 (полнофункциональный), 1 порт USB 3.2 Type A, 1 комбинированный разъем для наушников / микрофона, 1 x HDMI, веб-камера, считыватель отпечатков пальцев, Wi-Fi 6, Клавиатура С Подсветкой, Серебристый', '724.00', '380 x 260', '2.3 кг', '2022', '../k-store/uploads/uploads/image/product/Dell-Inspiron.png', 1, '2022-03-18');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;