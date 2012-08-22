<?PHP

echo "<p>";
echo "1        ****************************";
echo "<p>";

$file_contents = readfile("dictionary.txt"); // lee el archivo completo
print $file_contents;

// si el archico esta en otra carpeta
echo "<p>";
echo "2          ****************************";
echo "<p>";


print readfile("dictionary.txt");
$file_contents = readfile("dictionary.txt");



echo "<p>";
echo "3          ****************************";
echo "<p>";


$file_contents = fopen("dictionary.txt", "r");
print $file_contents;
fclose($file_contents);


echo "<p>";
echo "4         ****************************";
echo "<p>";



$file_handle = fopen("dictionary.txt", "r"); 	// $file_handle es una funcion que puede tener cualquier nombre "r" indica que
												// que es de solo lectura

while (!feof($file_handle))  // lee mientras no llegue el final del archivo
{
	
$line_of_text = fgets($file_handle); //lee una sola linea del archvio
print $line_of_text . "<BR>"; //imprime la linea leida y salta hacia abajo

}

fclose($file_handle);

echo "<p>";
echo "5        ****************************";
echo "<p>";


echo "Checking if the file exists";

echo "<p>";

if (file_exists("dictionary2.txt")) {
print "Respuesta: file exists";
}
else {
print "Respuesta: file doesn't exist";
}


?>
