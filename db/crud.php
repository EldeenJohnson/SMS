<?php

use LDAP\Result;

    class crud{
        private $db; //private database object

        function __construct($conn) //contrustor to initialize private variable tot he database connection.
        {
            $this->db = $conn;
        }

        public function insertRegistrants($fname, $lname, $dob, $email, $contact, $gender, $a_path)
        {
            try{
                $sql = "INSERT INTO registrant (firstname,lastname,dob,emailaddress,contactnum,gender_id,`avatar_path`) VALUES (:fname, :lname, :dob, :email, :contact, :gender, :a_path)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':gender',$gender);
                $stmt->bindparam(':a_path',$a_path);

                $stmt->execute();
                return true;
            } 
            catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        /*function emailExists() {
            $sql = "SELECT * FROM `registrant` where emailaddress = :email";
            $result = $this->db->query($sql);
            if ($result > 0){
                die("The enetered email already exists");
            }else{

            }
        }*/
    

        public function editregistrant($id, $fname, $lname, $dob, $email, $contact, $gender)// $a_path)
            {
                try{
                $sql = "UPDATE `registrant` SET `firstname`=:fname,`lastname`=:lname,`dob`=:dob,`emailaddress`=:email,`contactnum`=:contact,`gender_id`=:gender, /*`avatar_path`=:a_path*/ WHERE registrant_id=:id";   
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':id',$id);    
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':gender',$gender);
                //$stmt->bindparam(':a_path',$a_path);

                $stmt->execute();
                return true;
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                    return false;
                }      
            }


        public function getRegistrants(){
            try{
            $sql = "SELECT * FROM `registrant` a inner join gender s on a.gender_id = s.gender_id";
            $result = $this->db->query($sql);
            return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getregistrantDetails($id){
            try{
                $sql = "SELECT * FROM registrant a inner join gender s on a.gender_id = s.gender_id WHERE registrant_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteregistrant($id){
           try{
                $sql = "DELETE FROM registrant WHERE registrant_id = :id";    
                $stmt = $this->db->prepare($sql);   
                $stmt->bindparam(':id', $id);
                $stmt->execute();
                return true;
           }catch(PDOException $e){
                echo $e->getMessage();
                return false;
           }
        }

        public function getgender(){
            try{
                $sql = "SELECT * FROM `gender`";
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getgenderById($id) {
            try {
              $sql = "SELECT * FROM gender WHERE gender_id = :id";
              $stmt = $this->db->prepare($sql);
              $stmt->bindparam(':id', $id);
              $stmt->execute();
              $result = $stmt->fetch();
              return $result;
            } catch (PDOException $e) {
              echo $e->getMessage();
              return false;
            }
          }
        
    }
?>