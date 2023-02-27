<a href="http://localhost/learn_project.loc/test_file.php?lang=en">EN</a> |
<a href="http://localhost/learn_project.loc/test_file.php?lang=uk">UA</a> |
<a href="http://localhost/learn_project.loc/test_file.php?lang=ru">RU</a> 
<br>
<?php

if($_SERVER['REQUEST_URI']) {
    $str = 'English: <br> Lorem ipsum dolor aset...';
    
    if(isset($_GET['lang'])) {
        
        if ($_GET['lang'] == 'en') {
            $str = 'English: <br> Lorem ipsum dolor aset...';            
        } elseif($_GET['lang'] == 'uk') {
            $str = 'Україна: <br> Це текст риба, не має ніякого сенсу...';          
        } elseif($_GET['lang'] == 'ru') {
            $str = 'Русский: <br> Это текст рыба, не имеет смысловой нагрузки...';
        }
        
    }
    
    print $str;
} 
