<?php
    // kết nối csdl 
    include_once('config.php');

    $action    = isset($_POST['action']) ? $_POST['action'] : '';
    $name      = isset($_POST['name']) ? $_POST['name'] : '';
    $address   = isset($_POST['address']) ? $_POST['address'] : '';
    $date      = isset($_POST['date']) ? $_POST['date'] : '';
    $sex       = isset($_POST['sex']) ? $_POST['sex'] : -1;

    if($action == 'submit') {
        if($name == '') {
            $errors['name'] = 'Vui lòng nhập họ và tên';
        }

        if($date == '') {
            $errors['date'] = 'Vui lòng nhập ngày sinh';
        }

        if($address == '') {
            $errors['address'] = 'Vui lòng nhập địa chỉ';
        }

        if($sex < 0) {
            $errors['sex'] = 'Vui lòng chọn một giới tính';
        }

        if(empty($errors)) {
           $sql = "INSERT INTO student(name,date,sex,address)
                VALUES('". $name ."', ".$date.", $sex ,'".$address."')";
            mysqli_query($link, $sql);
            if ( mysqli_insert_id($link) > 0 ) {
                header($_SERVER['REQUEST_URI']);
            }
        }
    }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Validate</title>
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="//code.jquery.com/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend class="col-sm-8 col-sm-offset-2">Form Validate</legend>
                    </div>
                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Name :</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" name="name" placeholder="Mời bạn nhập tên ">
                             <?php if(isset($errors['name'])) : ?>
                                <span class="text-danger"><?php echo $errors['name'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>


                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Date :</label>
                        <div class="col-sm-4 ">
                            <input type="date" class="form-control" name="date" placeholder="Mời bạn nhập ngày sinh ">
                            <?php if(isset($errors['date'])) : ?>
                                <span class=" text-danger"><?php echo $errors['date'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Sex :</label>
                        <div class="radio">
                            <label><input type="radio" name="sex" value="1" <?php echo $sex == 1 ? 'checked = "checked"': ""  ?> >Nam</label>
                            <label><input type="radio" name="sex" value="0" <?php echo $sex ==0 ? 'checked = "checked" ': "" ?> >Nữ</label>
                            
                        </div>
                        <div class="col-sm-4 col-sm-offset-4">
                            <?php if(isset($errors['sex'])) : ?>
                                <span class=" text-danger"><?php echo $errors['sex'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label class="control-label col-sm-2 col-sm-offset-2" for="name">Address :</label>
                        <div class="col-sm-4 ">
                            <input type="text" class="form-control" name="address" placeholder="Mời bạn nhập địa chỉ ">
                           <?php if(isset($errors['address'])) : ?>
                                <span class=" text-danger"><?php echo $errors['address'] ?></span>
                            <?php endif ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-4">
                            <input type="hidden" name="action" value="submit">
                             <button class="btn btn-sm btn-primary" type="submit">Instart</button>
                        </div>
                    </div>
            </form>
        </div>
    </body>
</html>