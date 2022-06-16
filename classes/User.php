<?php 

class User
{
    // Locate User
    public static function FindUserById($id)
    {
        return DB::query('SELECT * From user WHERE id =:id', array(':id'=>$id));
    }

    public static function FindUserByUserName($UserName)
    {

       return DB::query('SELECT * From user WHERE Username =:Username', array(':Username'=>$UserName));

    }

    // Security Methods
    public static function AuthenticateUser($username, $password)
    {
        $CheckName = User::FindUserByUserName($username);
        if(!$CheckName)
            return;
        

       // if(password_verify()   // checks if password matches
        
        
        
    }

}