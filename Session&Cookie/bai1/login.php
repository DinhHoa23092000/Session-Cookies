<?php

session_start();

if (isset($_POST['dangnhap'])) 
{

    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);

        if($username=="admin" && $password=="123"){
            ?>
    <script>
        location.href = "profile.php";
    </script>
    <?php
        }else{
            ?>
        <script>
            alert("login fail. Try again!");
        </script>
        <?php
        }
        $arr=array($username,$password);
        $_SESSION['login'] = $arr;
    }
?>
            <!DOCTYPE html>
            <html>

            <head>
                <title></title>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            </head>

            <body>
                <form action='' method='POST'>
                    <table cellpadding='0' cellspacing='0' border='1'>
                        <tr>
                            <td>
                                Tên đăng nhập :
                            </td>
                            <td>
                                <input type='text' name='txtUsername' />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mật khẩu :
                            </td>
                            <td>
                                <input type='password' name='txtPassword' />
                            </td>
                        </tr>
                    </table>
                    <input type='submit' name="dangnhap" value='Đăng nhập' />

                </form>
            </body>

            </html>