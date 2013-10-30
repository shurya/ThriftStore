<script>
function get_one(x)
{
	if(x=="inactive")
	{
		window.location='index.php?filter=0';
	}
	else if(x=='')
	{
		window.location='index.php';
	}
}
</script>
<?php
	$order=$_GET['order'];
	if(isset($_GET['filter']))
		{
			if(($_GET['filter'])==0)
			{
				$result = $product ->getallproduct_0();
			}
		}
	else if(isset($order))
	{
		if($order=='price_asc')
		{
			$result=$product->getallproduct_priceasc();
		}
		else if($order=='price_desc')
		{
			$result=$product->getallproduct_pricedesc();
		}
		else if($order=='title_asc')
		{
			$result=$product->getallproduct_titleasc();
		}
		else if($order=='title_desc')
		{
			$result=$product->getallproduct_titledesc();
		}
		else if($order=='seller_asc')
		{
			$result=$product->getallproduct_sellerasc();
		}
		else if($order=='seller_desc')
		{
			$result=$product->getallproduct_sellerdesc();
		}
		else if($order=='date_asc')
		{
			$result=$product->getallproduct_dateasc();
		}
		else if($order=='date_desc')
		{
			$result=$product->getallproduct_datedesc();
		}
	}
	else 
	{
		$result=$product->getallproduct_1();
	}	
	//$result_news = $news->getallnews();

?>
<?php
$num=$connect->fetchNum($result);
?>
<div class="content">
    <span class="bar"><a href="#" class="add_btn">+ ДОБАВИТЬ НОВЫЙ</a></span>
    <?php
	$filter=$_GET['filter'];
	if($filter=='')
	{
	?>
    <span class="bar filter">
    <input type="checkbox" value="inactive" <?php if(isset($_GET['filter']) && ($_GET['filter']=='0')){?> checked="checked" <?php } ?>onclick="get_one(this.value);">Show inactive products</span>
    <?php
    }
	else if($filter==0)
	{
	?>
    <span class="bar" style="text-align:right">
    <input type="checkbox" value="" <?php if(isset($_GET['filter']) && ($_GET['filter']=='0')){?> checked="checked" <?php } ?>onclick="get_one(this.value);">Show inactive products</span>
    <?php
	}
	?>
    <div class="clear"></div>
    <table width="101%" border="0" cellspacing="1" cellpadding="10" style="border:1px solid #c3c3c3;">
  <tr bgcolor="#9c9c9c">
    <th width="14%" height="35" align="left" valign="middle" scope="col">
    <?php 
	if($order!=='price_asc')
	{ 
	?>
    <a href="index.php?order=price_asc">Фото и Цена</a>
	<?php 
	}
	else if($order!=='price_desc')
	{
	?>
    <a href="index.php?order=price_desc">Фото и Цена</a>
    <?php
	}
	?>
    </th>
    <th width="18%" align="left" valign="middle" scope="col">
     <?php 
	if($order!=='title_asc')
	{ 
	?>
    <a href="index.php?order=title_asc">Наимование</a>
	<?php 
	}
	else if($order!=='title_desc')
	{
	?>
    <a href="index.php?order=title_desc">Наимование</a>
    <?php
	}
	?>
    </th>
    <th width="22%" align="left" valign="middle" scope="col">Описание </th>
    <th width="20%" align="left" valign="middle" scope="col">
    <?php 
	if($order!=='seller_asc')
	{ 
	?>
    <a href="index.php?order=seller_asc">Продаввец (ВК)</a>
	<?php 
	}
	else if($order!=='seller_desc')
	{
	?>
    <a href="index.php?order=seller_desc">Продаввец (ВК)</a>
    <?php
	}
	?>
    </th>
    <th width="14%" align="left" valign="middle" scope="col">
    <?php 
	if($order!=='date_asc')
	{ 
	?>
    <a href="index.php?order=date_asc">Дата</a>
	<?php 
	}
	else if($order!=='date_desc')
	{
	?>
    <a href="index.php?order=date_desc">Дата</a>
    <?php
	}
	?>
    </th>
    <th width="12%" align="left" valign="middle" scope="col">Статус</th>
  </tr>
  <?php
  if($num>0)
  {
  	while($row=$connect->fetchObject($result))
  	{
  ?>
  <tr bgcolor="#e7e7e7">
    <td align="left" valign="top"><img src="images/img.png" width="61" height="49" alt="shoes"><br>
      <?=$row->price; ?></td>
    <td align="left" valign="top"><?=$row->product_title; ?></td>
    <td align="left" valign="top"><?=substr($row->product_description,0,300);?></td>
    <td align="left" valign="top"><a href="<?=$row->seller_link?>" target="_blank"><?=$row->seller_link;?></a></td>
    <td align="left" valign="top"><?=$row->date_posted;?></td>
    <td align="left" valign="top" class="status">
    <?php
	$status=$row->status;
	if($status=='0')
		echo "Не активно";
	else if($status=='1')
		echo "<span>На сайте</span>";
	else if($status=='2')
		echo "Черновик";
	else
	?></td>
  </tr>
  <?php
  	}
  }
  else
  {
  ?>
  <tr bgcolor="#e7e7e7">
    <td colspan="6" align="left" valign="top">No Records Found</td>
    </tr>
  <?php
  }
  ?>
    </table>
<a href="#" class="add_btn" style="margin-top:20px;">+ ДОБАВИТЬ НОВЫЙ</a>
    </div>