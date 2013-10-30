<?php
class productmanager extends database
{
	function getallproduct()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY product_id DESC";
		return $this->exeQuery($sql);
	}
	function getallproduct_0()
	{
		$sql="SELECT * FROM ilvl_product WHERE status!='1' ORDER BY product_id DESC";
		return $this->exeQuery($sql);
	}
	function getallproduct_1()
	{
		$sql="SELECT * FROM ilvl_product WHERE status='1' ORDER BY product_id DESC";
		return $this->exeQuery($sql);
	}
	function getallactiveproducte_bydate()
	{
		$sql="SELECT * FROM ilvl_product WHERE status='1' ORDER BY date_published DESC limit 0,3";
		return $this->exeQuery($sql);
	}
	function getallproduct_priceasc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY price ASC";
		return $this->exeQuery($sql);
	}
	function getallproduct_pricedesc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY price DESC";
		return $this->exeQuery($sql);
	}
	function getallproduct_titleasc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY product_title ASC";
		return $this->exeQuery($sql);
	}
	function getallproduct_titledesc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY product_title DESC";
		return $this->exeQuery($sql);
	}
	function getallproduct_sellerasc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY seller_link ASC";
		return $this->exeQuery($sql);
	}
	function getallproduct_sellerdesc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY seller_link DESC";
		return $this->exeQuery($sql);
	}
	function getallproduct_dateasc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY date_posted ASC";
		return $this->exeQuery($sql);
	}
	function getallproduct_datedesc()
	{
		$sql="SELECT * FROM ilvl_product ORDER BY date_posted DESC";
		return $this->exeQuery($sql);
	}
}
?>