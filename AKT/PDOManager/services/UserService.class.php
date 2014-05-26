<?php



class UserService {
    
    /*
    private $name;
    private $firstName;
    private $phone;
    private $email;
    private $password;
    private $job;
    
    private $adresse;
    private $role;
	
     * 
     */
public static function createAccount($db, $user) {

   
    $insert = $db->prepare("INSERT INTO ".DATABASE_SCHEMA.".USER_ACCOUNT(  
                           user_email,
                           user_name , 
                           user_firstName , 
                           user_phone ,
                           user_job,
                           user_address,
                           user_role
                            ) 

                           VALUES (:email, :name, :firstName, phone:, :job, :address, :role);");


    # Bind Values.
$insert->bindValue(':email', $user->email, PDO::PARAM_STR);
$insert->bindValue(':name', $user->name, PDO::PARAM_STR);
$insert->bindValue(':firstName', $user->firstName, PDO::PARAM_STR);
$insert->bindValue(':phone', $user->phone, PDO::PARAM_STR);
$insert->bindValue(':job', $user->job, PDO::PARAM_STR);
$insert->bindValue(':address', $user->address, PDO::PARAM_STR);
$insert->bindValue(':role', $user->role, PDO::PARAM_STR);





    # Execute.
    if(!$insert->execute()) {
        return array('executed'=> false, 'insert'=> $insert);
    } else {
        return array('executed'=> true, 'insert'=>'');
    }
}
        
        
        
        
        
public static function consultAccount($db, $user) {
    


    # Prepare SQL query.
    $sqlQuery = "SELECT * FROM ".DATABASE_SCHEMA.".USER_ACCOUNT ".
                                "where user_email =:email and  user_password =:password;";

    # Bind Values.
    $query = $db->prepare($sqlQuery);
    $query->bindValue(':email', $user->email, PDO::PARAM_STR);
    $query->bindValue(':password', $user->password, PDO::PARAM_STR);

    $query->setFetchMode(PDO::FETCH_OBJ);

    if(!$query->execute()) {
        return array('executed'=> false, 'query'=> $query);
    } else {

        if ( $row = $query->fetch()) {

            return array('executed'=> true, 'user'=> $row);
        } else {
             return array('executed'=> true, 'user'=> NULL, );
        }
    }
}
        
        
        
 public static function updateAccount($db, $user) {


    # Prepare SQL query.
    $update = $db->prepare(
    "UPDATE ".DATABASE_SCHEMA.".USER_ACCOUNT  
            SET	user_password=:password, 
            	user_name=:name,
                user_firstName=:firstName,
                user_phone=:phone,
                user_job=:job,
                user_address=:address,
                user_role=:role;");

    # Bind Values.
    $update->bindValue(':password', $user->email, PDO::PARAM_STR);
    $update->bindValue(':name', $user->name, PDO::PARAM_STR);
    $update->bindValue(':firstName', $user->firstName, PDO::PARAM_STR);
    $update->bindValue(':phone', $user->phone, PDO::PARAM_STR);
    $update->bindValue(':job', $user->job, PDO::PARAM_STR);
    $update->bindValue(':address', $user->address, PDO::PARAM_STR);
    $update->bindValue(':role', $user->role, PDO::PARAM_STR);


    # Execute
    if(!$update->execute()) {
        return array('executed'=> false, 'query'=> $query);
    } else {
        return array('executed'=> true, 'query'=> '');
    }
}




 public static function clearAccount($db, $user) {

     
    # Prepare SQL query.
    $delete = $db->prepare( "DELETE FROM ".DATABASE_SCHEMA.".USER_ACCOUNT  WHERE user_email='".$user->email."' ;");

    # Execute
    if(!$delete->execute()) {
        return array('executed'=> false, 'query'=> $query);
    } else {
        return array('executed'=> true, 'query'=> '');
    }
}


    }
?>
