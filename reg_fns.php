<?


    function check_login($user)
    {
        db_connect();
        
        $query = sprintf(" SELECT username FROM users WHERE users.username = '%s' ",
                        mysql_real_escape_string($user));
                        
        $result = mysql_query($query);
        if(mysql_num_rows($result) > 0) return FALSE;
            else   return TRUE;            
    }
    
    
    function register($reg)
    {
        db_connect();
        
        mysql_query(" INSERT INTO users (username,password,email) VALUES($reg) ");
    }
    
    function check_user($login, $pswd)
    {
        db_connect();
        
        $query = sprintf(" SELECT username FROM users WHERE users.username = '%s' AND users.password = '%s' ",
                        mysql_real_escape_string($login),
                        mysql_real_escape_string($pswd));
                        
        $result = mysql_query($query);
        if(mysql_num_rows($result) > 0) return TRUE;
            else   return FALSE;               
    }
    
    function exit_cab()
    {
        unset($_SESSION['username']);
    }
    
    function get_status($login)
    {
        db_connect();
        
        $query = sprintf(" SELECT status FROM users WHERE users.username = '%s' ",
                         mysql_real_escape_string($login));
        
        $result = mysql_query($query); 
        
        $row = mysql_fetch_array($result);
        
        return $row;
    }

?>