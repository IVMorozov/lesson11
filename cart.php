<?php
  session_start();
      
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	  <meta charset="utf-8">
	  <title>Корзина</title>
  	<link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <section class="bgrnd-main">
      <nav>
        <a class="navigation" href="index.php">Список товаров</a>
        <a class="navigation active" href="cart.php">Корзина</a>
      </nav>


<?php
  if (isset($_SESSION['items']))
  {
  ?>
  <div class="itemspace">
  <table class="bgrnd-test" border="0">
  <tr class="help-block">
    <td class="firstcol">Описание</td>
    <td class="secondcol">Цена</td>
    <td class="thirdcol">Количество</td >
    <td class="fcol">Сумма</td >
    <td class="fcol"></td >
  </tr>

  <?

  foreach ($_SESSION['items'] as $index => $units)
  {
    if ($_SESSION['items']['Count'][$index]>0)
    {
      ?>  
        <tr>
          <td class="firstcol"><?=$_SESSION['items']['IDescr'][$index]?></td>
          <td class="secondcol"><?=$_SESSION['items']['IPrice'][$index]?></td>
          <td class="thirdcol"><?=$_SESSION['items']['Count'][$index]?></td>
          <td class="fcol"><?=$_SESSION['items']['IPrice'][$index]*$_SESSION['items']['Count'][$index]?></td>
          <td class="fcol"><a href="RemoveFromCart.php?_item=<?=$index?>">удалить</a></td>
        </tr>
      <?  
    }
  }
 ?>
     </table>

<?
  echo '<br>Ваш заказ: Количество товаров - '.$_SESSION['CartCount'].'  на сумму '.$_SESSION['CartPrice'].'<br><br>';
?>
     <a class="navigation" href="order.php">Оформить заказ</a>
     <a class="navigation" href="ClearCart.php">Очистить корзину</a>
<?
}
else
{
  echo 'Корзина пуста';
}

?>     
  </body>
</html>