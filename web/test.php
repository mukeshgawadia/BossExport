<?php
function display()
{
    echo "hello ".$_POST[“email”];
}
if(isset($_POST['submit']))
{
   display();
} 
?>