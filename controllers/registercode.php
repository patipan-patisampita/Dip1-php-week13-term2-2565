<?php include_once("../config/dbcon.php"); ?>

<?php 
    if(isset($_POST['register_btn'])){
        $name = mysqli_real_escape_string($con,$_POST['name']) ;
        $email = mysqli_real_escape_string($con,$_POST['email']) ;
        $password = mysqli_real_escape_string($con,$_POST['password']) ;
        $confirm_password = mysqli_real_escape_string($con,$_POST['confirm_password']) ;

        $phone = mysqli_real_escape_string($con,$_POST['phone']) ;
       
        $address = mysqli_real_escape_string($con,$_POST['address']) ;
        $role_as = mysqli_real_escape_string($con,$_POST['role_as']) ;

        $photo = $_FILES['photo']['name'] ;
        $photo_extension = pathinfo($photo,PATHINFO_EXTENSION); //rename this photo
        $filename = time().'.'.$photo_extension;
        $active = $_POST['active'] == true ? '1' : '0';

        if($password == $confirm_password ){
            //Check Email
            $checkemail = "SELECT email FROM users WHERE email = '$email' ";
            $checkemail_run = mysqli_query($con,$checkemail); 
            if(mysqli_num_rows($checkemail_run)>0){
                header("Location: ../register.php");
                exit(0);
            }
            else{
                $query ="INSERT INTO users (name, email, password, phone, photo, address, active, role_as)
                VALUES ('$name', '$email', '$password ', '$phone', '$filename', '$address', '$active', '$role_as')"; 
                $query_run = mysqli_query($con,$query);

                if($query_run){
                    move_uploaded_file($_FILES['photo']['tmp_name'],'../uploads/users/'.$filename);
                    header("Location: ../login.php");
                    exit(0);
                }
                else{
                    print("ลงทะเบียนไมผิดพลาด");
                    header("Location: ../register.php");
                    exit(0);
                }
            }
        }

        else{
            print("รหัสผ่ารไม่ตรงกัน");
            header("Location: ../register.php");
            exit(0);
        }
    }
?>