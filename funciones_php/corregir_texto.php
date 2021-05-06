<?php
$mal=array('Á','á', 'É', 'é', 'Í', 'í', 'Ó', 'ó', 'Ú', 'ú', 'Ñ', 'ñ', '¿', '¡', '¢', '£', '¤', '¥', '¦', '§', '¨', '©', 'ª', '«', '¬', '®', '¯', '°', '±', '²', '³', '´', 'µ', '¶', '·', '¸', '¹', 'º', '»', '¼', '½', '¾', '¿', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', '×', 'Ø','Ù', 'Ú', 'Û', 'Ü', 'Ý', 'Þ', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ð', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', '÷', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'þ', 'ÿ');

$bien= array('&#193','&#225','&#201','&#233','&#205','&#237','&#211','&#243','&#218','&#250','&#209','&#241','&#191', '&#161', '&#162', '&#163', '&#164', '&#165', '&#166', '&#167', '&#168', '&#169', '&#170', '&#171', '&#172', '&#174', '&#175', '&#176', '&#177', '&#178', '&#179', '&#180', '&#181', '&#182', '&#183', '&#184', '&#185', '&#186', '&#187', '&#188', '&#189', '&#190', '&#191', '&#192', '&#193', '&#194', '&#195', '&#196', '&#197', '&#198', '&#199', '&#200', '&#201', '&#202', '&#203', '&#204', '&#205', '&#206', '&#207', '&#208', '&#209', '&#210', '&#211', '&#212', '&#213', '&#214', '&#215', '&#216','&#217', '&#218', '&#219', '&#220', '&#221', '&#222', '&#223', '&#224', '&#225', '&#226', '&#227', '&#228', '&#229', '&#230', '&#231', '&#232', '&#233', '&#234', '&#235', '&#236', '&#237', '&#238', '&#239', '&#240', '&#241', '&#242', '&#243', '&#244', '&#245', '&#246', '&#247', '&#248', '&#249', '&#250', '&#251', '&#252', '&#253', '&#254', '&#255');

$bienUrl=array('A','a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'x', 'O','U', 'U', 'U', 'U', 'Y', '-', '-', 'a', 'a', 'a', 'a', 'a', 'a', '-', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'o', 'n', 'o', 'o', 'o', 'o', 'o', '-', 'o', 'u', 'u', 'u', 'u', 'y', 'p', 'y');

function sanear_string($string)
{

  $string = trim($string);

  $string = str_replace(
      array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
      array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
      $string
  );

  $string = str_replace(
      array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
      array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
      $string
  );

  $string = str_replace(
      array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
      array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
      $string
  );

  $string = str_replace(
      array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
      array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
      $string
  );

  $string = str_replace(
      array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
      array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
      $string
  );

  $string = str_replace(
      array('ñ', 'Ñ', 'ç', 'Ç'),
      array('n', 'N', 'c', 'C',),
      $string
  );

  //Esta parte se encarga de eliminar cualquier caracter extraño
  $string = str_replace(
      array( '"',"¨", "º", "-", "~",
           "#", "@", "|", "!",
           "·", "$", "%", "&", "/",
           "(", ")", "?", "'", "¡",
           "¿", "[", "^", "<code>", "]",
           "+", "}", "{", "¨", "´",
           ">", "< ", ";", ",", ":",
           ".", " "),
      '-',
      $string
  );


  return $string;
}
 ?>
