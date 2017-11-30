<?php
      namespace myspace;
      require_once 'autoloader.php';
      session_start();
      
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
	  <meta charset="utf-8">
	  <title>Магазин</title>
  	<link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <section class="bgrnd-main">

      <nav>
        <a class="navigation active" href="index.php">Список товаров</a>
        <a class="navigation" href="cart.php">Корзина</a>
      </nav>
      <div class="smalcart">
        <strong>Товаров в корзине:</strong><?=$_SESSION['CartCount']?> шт.
        <br/><strong>На сумму:</strong><?=$_SESSION['CartPrice']?> руб.    
        <br/><a href=''>Оформить заказ</a>
      </div>
    </section>
    <?
      $Item[0] = new Car();
      $Item[0]->ItemName = 'Ford';
      $Item[0]->ItemType = 'Focus';
      $Item[0]->CarColor = 'Red';
      $Item[0]->SetPrice (600000);
      $Item[0]->GetDescription ($Descr);

      $Item[1] = new Car();
      $Item[1]->ItemName = 'Renault';
      $Item[1]->ItemType = 'Logan';
      $Item[1]->CarColor = 'Blue';
      $Item[1]->SetPrice (500000);
      $Item[1]->GetDescription ($Descr);

      $Item[2] = new TV();
      $Item[2]->ItemName = 'LG';
      $Item[2]->ItemType = "26'";
      $Item[2]->TVColor = 'White';
      $Item[2]->SetPrice(20000);
      $Item[2]->GetDescription ($Descr);

      $Item[3] = new TV();
      $Item[3]->ItemName = 'Sony';
      $Item[3]->ItemType = "32'";
      $Item[3]->TVColor = 'Black';
      $Item[3]->SetPrice(30000);
      $Item[3]->GetDescription ($Descr);

      $Item[4] = new Pen();
      $Item[4]->ItemName = 'Eric Crause';
      $Item[4]->ItemType = 'Gel';
      $Item[4]->SetPrice(20);
      $Item[4]->GetDescription ($Descr);

      $Item[5] = new Pen();
      $Item[5]->ItemName = 'Bic';
      $Item[5]->ItemType = 'Ball';
      $Item[5]->SetPrice(30);
      $Item[5]->GetDescription ($Descr);

      $Item[6] = new Duck();
      $Item[6]->ItemName = 'Grey Duck';
      $Item[6]->ItemType = '30-50cm';
      $Item[6]->SetPrice(400);
      $Item[6]->GetDescription ($Descr);

      $Item[7] = new Duck();
      $Item[7]->ItemName = 'White Duck';
      $Item[7]->ItemType = '50-70cm';
      $Item[7]->SetPrice(600);
      $Item[7]->GetDescription ($Descr);

      //echo '<pre>';
      //var_dump($Item);
      ?>
      <div class="itemspace">
      <table class="bgrnd-test" border="0">
      <tr class="help-block"><td class="firstcol">Описание</td><td class="secondcol">Цена</td><td class="thirdcol"></td></tr>
      <?
      foreach ($Item as $index => $units)
      {
        $_SESSION['items'][$index]=$Item[$index];
        $_SESSION['items']['IPrice'][$index]=$Item[$index]->ItemPrice;
        $_SESSION['items']['IDescr'][$index]=$Item[$index]->Description;
      ?>  
        <tr><td class="firstcol"><?=$Item[$index]->Description?></td><td class="secondcol"><?=$Item[$index]->ItemPrice?></td><td class="thirdcol"><a href="AddToCart.php?_item=<?=$index?>">В корзину</a></td></tr>
      <?  
        //echo $Item[$index]->Description;
        //echo '<a href="AddToCart.php'.'?_item='.$index.'">В корзину</a><br>';
      //var_dump($Item[$index]->ItemPrice);
      //var_dump($_SESSION['items'][$index]);
      }

    ?>
    </table>
    </div>
       
  </body>
</html>