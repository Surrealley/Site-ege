<?

function lang($str)
{
    $lang = array(

        'main' => 'Главная',
        'news' => 'Теория',
        'video' => 'Видеоуроки',
        'gallery' => 'Наши результаты',
        'read' => 'Читать',
        'read_more' => 'Читать далее',
        'see' => 'Смотреть',
        'signup' => 'Регистрация',
        'forgot' => 'Забыл пароль?',
        'enter' => 'Войти',
        'posted' => 'Опубликовано',
        'send' => 'Отправить',
        'name' => 'Ваше имя',
        'text' => 'Текст',
        'captcha' => 'Символы с картинки',
        'comments' => 'Комментарии',
        'post_comment' => 'Оставить комментарий',
        'says' => 'говорит',
        'login' => 'Логин',
        'pswd' => 'Пароль',
        'again' => 'еще раз',
        'signup' => 'Регистрация',
        'email' => 'Эл. почта',
        'menu' => 'Меню',
        'all' => 'Все',
        'add' => 'Добавить',
        'photo' => 'фото',
        'title' => 'Название',
        'action' => 'Действие',
        'link' => 'Ссылка',
        'author' => 'Автор',
        'date' => 'Дата',
        'time' => 'Время',
        'text' => 'Текст',
        'keywords' => 'Ключевые слова',
        'description' => 'Мета описание',
        'code' => 'Код видео (iframe)',
        'status' => 'Статус',
        'save' => 'Сохранить',
        'edit' => 'Редактирование',
        'hello' => 'Приветствую',
        'exit' => 'Выйти'

    );
    
    $str = $lang[$str];
    
    if(in_array($str, $lang)) return $str; else return false;
}




?>