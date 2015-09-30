<!-- 
  -- index.php - useradmin-lamp
  -- the application view page, containing sections to add and list users
  -- 
  -- Aziz | 15 Sep 2015
  -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>User Administration</title>
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img src="img/user.png" /> User Administration
                <!--<img src="img/useradmin.jpg" /> User Administration-->
            </div><!-- header -->
            <!--<h1 class="main_title">Using PHP/MySQL and Ajax</h1>-->
            <div class="content">
                <fieldset class="field_container add">
                    <legend> <img src="img/plus.png"> Add User </legend>
                    <form>
                        <input type="text" id="full_name" class="frm_input" placeholder="Full name">
                        <input type="text" id="email" class="frm_input" placeholder="Email">
                        <input type="text" id="age" class="frm_input" placeholder="Age">
                        <input type="button" class="frm_button" value="Add" onclick="add_user()">
                    </form>
                </fieldset>
                <fieldset class="field_container list">
                    <legend> <img src="img/list.png"> List Users </legend>
                    <div id="list_container">
                        <?php 
                            // including the config file
                            include('cnfg.php');
                            $pdo = connect();
                            
                            // list_users : this file displays the list of users in a table view
                            include('list_users.php'); 
                        ?>
                    </div><!-- list_container -->
                </fieldset>
            </div><!-- content -->    
            <div class="footer">
                powered by <a href="https://twitter.com/sabooraziz">@sabooraziz</a>
            </div><!-- footer -->
        </div><!-- container -->
    </body>