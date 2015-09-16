<?php

function add_gender($gender, $control) { // add gender and control type into database
    global $db;

    try {
        $query = 'insert into ControlType (control, gender) values (:control,:gender)';
        $statement = $db->prepare($query);

        $statement->bindValue(':control', $control);
        $statement->bindValue(':gender', $gender);
        $statement->execute();
        $statement->closeCursor();
        
        $query='SELECT LAST_INSERT_ID()';
        $statement2 = $db->prepare($query);
        $statement2->execute();
        
        $id=$statement2->fetch();;
        
        $statement->closeCursor();
        return $id[0];
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function passing_position($id, $member1, $member2, $member3) { // add gender and control type into database
    global $db;

    try {
        $query = 'insert into passing_position (id, member1, member2, member3) values (:id,:member1,:member2,:member3)';
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        $statement->bindValue(':member1', $member1);
        $statement->bindValue(':member2', $member2);
        $statement->bindValue(':member3', $member3);
        $statement->execute();
        $statement->closeCursor();
    
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function add_acceptance($id, $accept) { // add gender and control type into database
    global $db;

    try {
        $query = 'update ControlType set acceptance=:accept where id=:id';
        $statement = $db->prepare($query);

        $statement->bindValue(':accept', $accept);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
       
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function add_interest($id, $interest) { // add gender and control type into database
    global $db;

    try {
        $query = 'update ControlType set interest=:interest where id=:id';
        $statement = $db->prepare($query);

        $statement->bindValue(':interest', $interest);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
       
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function check_condition_num($gender) { //return the #s of negative control 
    global $db;

    try {
        $query = "select count(*) as total FROM ControlType where (gender={$gender
                } and control=0) GROUP BY control";
        $statement = $db->prepare($query);
        $statement->execute();
        $total_neg_control= $statement->fetch() ;
        //echo $total_neg_control[0];
        $statement->closeCursor();
        return $total_neg_control;
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function add_data($id, $name_array,$value_array, $set_name) {
    global $db;

    try {
        $query = "insert into `RMproject`.`$set_name` (id";
                for ($z=0;$z<=24;$z++){
                    $query=$query.",".$name_array[$z];
                }
        $query=$query.") values ($id";
                for ($z=0;$z<=24;$z++){
                    $query=$query.",".$value_array[$z];
                }
        $query=$query.");";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function add_data2($id, $question_answer,$number, $set_name) {
    global $db;

    try {
        $query = "insert into `RMproject`.`$set_name`(id";
                for ($z=1;$z<=$number;$z++){
                    $query=$query.", Q".$z;
                }
        $query=$query.") values ($id";
                for ($z=0;$z<$number;$z++){
                    $query=$query.",".$question_answer[$z];
                }
        $query=$query.");";
        $statement = $db->prepare($query);
        $statement->execute();
        $statement->closeCursor();

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

function add_data3($id, $answer) {
    global $db;

    try {

        $query = 'insert into `RMproject`.`set7`(id,Answer) values (:id, :answer)';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->bindValue(':answer', $answer);
        $statement->execute();
        $statement->closeCursor();

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        display_db_error($error_message);
     }
}

?>