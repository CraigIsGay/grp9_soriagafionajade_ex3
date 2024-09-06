/* 
a. file_get_contents
b. file_put_contents()
c. file_exists()
d. file()
*/
<?php

echo file_get_contents("test.txt");
echo file_put_contents("test.txt","Hello World. Testing!");
echo file_exists("webdictionary.txt");
print_r(file("test.txt"));


?>