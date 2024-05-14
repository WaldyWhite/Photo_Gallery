<?php
function viewlinks($file)
{
    if (isset($_SESSION["auth"])) {
        echo '
        <form  id="cunning-form" method="post" action="coments">
            <input type="hidden" name="comm" value="' . $file . '">
            <input type="submit" value="Leave a comment" class="btn btn-link" >
        </form>
        ';
    }
}


function loginname()
{
    if ((isset($_SESSION['login']))) {
        echo '<p class="greetings"> Hello ' . $_SESSION['login'] . ' ! </p>';
    }
}