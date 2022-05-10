<?

    /// Функция для подключения к БД
    function db_connect()
    {
        $host = "localhost";
        $user = "minaev14_ege";
        $pswd = "Pi31415926";
        $db = "minaev14_ege";
        
        $connection = mysql_connect($host, $user, $pswd);
        mysql_query("SET NAMES utf8");
        if(!$connection || !mysql_select_db($db, $connection))
        {
            return false;
        }
        return $connection;
    }
    
    
    /// Функция для помещения результатов выборки в массив
    function db_result_to_array($result)
    {
        $res_array = array();
        
        $count = 0;
        
        while($row = mysql_fetch_array($result))
        {
            $res_array[$count] = $row;
            $count++;
        }
        return $res_array;
    }
    
    
    /// Функция для выборки меню
    function get_menu($lang)
    {
        db_connect();
        
        $query = sprintf( "SELECT * FROM pages WHERE pages.lang = '%s' AND pages.title_url != 'signup' AND pages.title_url != 'forgot' ",
                 mysql_real_escape_string($lang));
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
        
    }
    
    
    /// Функция для получения информации о странице
    function page_data($title,$lang)
    {
        db_connect();
        
        $query = sprintf(" SELECT * FROM pages WHERE pages.title_url = '%s' AND pages.lang = '%s' ",
                         mysql_real_escape_string($title),
                         mysql_real_escape_string($lang));
        
        $result = mysql_query($query); 
        
        $row = mysql_fetch_array($result);
        
        return $row;                
    }
    
    
    /// Функция для выборки новостей, видео, фото для сайта
    function select_data($table,$lang)
    {
        db_connect();
        
        $query = "SELECT * FROM $table WHERE $table.lang = '$lang' ORDER BY $table.id DESC";
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    
    /// Функция для получения информации о видео или новости
    function get_data($table,$title,$lang)
    {
        db_connect();
        
        $query = sprintf(" SELECT * FROM $table WHERE $table.title_url = '%s' AND $table.lang = '%s' ",
                         mysql_real_escape_string($title),
                         mysql_real_escape_string($lang));
        
        $result = mysql_query($query); 
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
    
    
    /// Функция для обрезки символов в строке
    function str_size($str, $num)
    {
        $str = iconv('UTF-8','windows-1251', $str);
        $str = substr($str, 0, $num);
        $str = iconv('windows-1251', 'UTF-8', $str);
        return $str;
    }
    
    
    /// Функция для получения последней новости для главной страницы сайта
    function get_last_news($lang)
    {
        db_connect();
        
        $query = sprintf(" SELECT * FROM news WHERE news.lang = '$lang' ORDER BY news.id DESC LIMIT 1 ");
        
        $result = mysql_query($query); 
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }
    
    
    /// Функция для получения комментариев для новости или видео
    function get_comments($title,$section,$lang)
    {
        db_connect();
        
        $query = sprintf( "SELECT * FROM comments WHERE comments.note_id = '%s' AND comments.section='%s' AND comments.lang = '%s' ",
                        mysql_real_escape_string($title),
                        mysql_real_escape_string($section),
                        mysql_real_escape_string($lang));
        
        $result = mysql_query($query);
        
        $result = db_result_to_array($result);
        
        return $result;
    }
    
    
    /// Функция добавления комментария в БД
    function add_comment($data)
    {
        db_connect();
        
        mysql_query(" INSERT INTO comments (author,text,note_id,section,date,time,lang) VALUES($data) ");
    }
    
    
    /// Функция капчи
    function captcha()
    {
        $captcha = rand(10000,99999);
        return $captcha;
    }
    
    /// Функция для очистки входящих данных
    function clear_data($data)
    {
        $data = trim(htmlspecialchars($data));
        return $data;
    }
    
    
    /// Функция для изменения языка
    function change_lang($lang)
    {
        $_SESSION['lang'] = $lang;
        return $_SESSION['lang'];
    }
    
    
    /// Функция для проверки, существует ли такая статья либо видео
    function check_data($table,$title,$lang)
    {
        db_connect();
        
        $query = sprintf(" SELECT * FROM  $table WHERE $table.lang = '%s' AND $table.title_url = '%s' ",
                        mysql_real_escape_string($lang),
                        mysql_real_escape_string($title));
                        
        $result = mysql_query($query);
        if(mysql_num_rows($result) > 0) return TRUE;
            else return FALSE;                
                        
    }
    
    /// Функция для восстановления пароля
    function forgot($user, $email)
    {
        db_connect();
        
        $query = sprintf(" SELECT * FROM users WHERE users.username = '%s' AND users.email = '%s' ",
                        mysql_real_escape_string($user),
                        mysql_real_escape_string($email));
                        
        $result = mysql_query($query);   
        if(mysql_num_rows($result) > 0) return TRUE;
            else return FALSE;              
    }
    
    /// Функция для изменения пароля в БД
    function change_pswd($pswd, $user)
    {
        db_connect();
        
        mysql_query("UPDATE users SET password='$pswd' WHERE users.username='$user' ");
    }
    
   
   
    function views($table, $title)
    {
        db_connect();
        
        $query = sprintf(" SELECT views FROM $table WHERE $table.title_url = '%s' ",
                        mysql_real_escape_string($title));
                        
        $result = mysql_query($query);
        
        $row = mysql_fetch_array($result);
        
        $views = $row['views']+1;
        
        mysql_query(" UPDATE $table SET views='$views' WHERE $table.title_url = '$title' ");
        
    }    
    


?>