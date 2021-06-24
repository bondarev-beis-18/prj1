<?php
$aWords = [
  'Массив',
  'Функция',
  'Дедлайн',
  'Приветствие',
  'Обучение',
  'Стажировка',
];
for ($i=0; $i<count($aWords); $i++)
{
$str = iconv('utf-8', 'utf-16le', $aWords[$i]);
 $str=strrev($str);
echo "$aWords[$i]"." | ".iconv('utf-16be', 'utf-8', $str);
echo '<p></p>';
}




?>