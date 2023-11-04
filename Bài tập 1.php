<!--Câu 1 -->
<?php
echo strlen('Hoàng Thị Minh Giang');
echo '<br>';
?>

<!-- Câu 2 -->
<?php
echo str_word_count('Hoang Thi Minh Giang');
echo '<br>';
?>  

<!-- Câu 3 -->
<?php
echo strrev('Hoang Thi Minh Giang');
echo '<br>';
?>

<!-- Câu 4 -->
<?php
echo strpos('Hoàng Thị Minh Giang','Giang');
echo '<br>';
?>

<!-- Câu 5: Thay thế Linh -> Minh -->
<?php
echo str_replace('Linh','Minh','Hoàng Thị Linh Giang');
echo '<br>';
?>

<!-- Câu 6 -->
<?php
$x='Hello';
$y='Hello world!';
$result= strncmp($x,$y,5);
    if($result == 0){
        echo 'chuỗi có bắt đầu bằng một chuỗi con của x';
    }
    else {
        echo 'Chuỗi bắt đầu bằng một chuỗi con khác';
    }
echo '<br>';
?>

<!-- Câu 7 -->
<?php
echo strtoupper('hoàng thị minh giang');
echo '<br>';
?>

<!-- Câu 8 -->
<?php
echo strtolower('HOÀNG THỊ MINH GIANG');
echo '<br>';
?>

<!-- Câu 9 -->
<?php
echo ucwords('hoàng thị minh giang');
echo '<br>';
?>

<!-- Câu 10 -->
<?php
echo trim(' hoàng thị minh giang ');
echo '<br>';
?>

<!-- Câu 11 -->
<?php
echo ltrim(' hoàng thị minh giang');
echo '<br>';
?>

<!-- Câu 12 -->
<?php
echo rtrim('hoàng thị minh giang ');
echo '<br>';
?>

<!-- Câu 13 -->
<?php
echo explode(' ','hoàng thị minh giang');
echo '<br>';
?>




