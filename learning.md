КРУД для сущности "Сотрудник"
поля:
-uuid
-имя
-фамилия
-отчество
-фотография (название файла, без полного пути)
+ timestamps + softDelete

КРУД для сущности "Пост"
поля:
-user_uuid
-текст
+ timestamps + softDelete

вывод списоков сотрудников + в каждом сотруднике массив его постов.
форматировать вывод поля фотографии под полный URL (в базе только название файла, на выходе полный URL до него)