<?php
trait ProductsModel
{
	//lay ve danh sach cac ban ghi
	public function modelRead($recordPerPage)
	{
		$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
		//lay bien page truyen tu url
		$page = isset($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"] - 1) : 0;
		//lay tu ban ghi nao
		$from = $page * $recordPerPage;
		//---
		//lay bien ket noi csdl
		$db = Connection::getInstance();
		//thuc hien truy van
		$query = $db->query("select * from products where category_id = $category_id order by id desc limit $from,$recordPerPage");
		//tra ve nhieu ban ghi
		return $query->fetchAll();
	}
	//tinh tong cac ban ghi
	public function modelTotalRecord()
	{
		$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
		//lay bien ket noi csdl
		$db = Connection::getInstance();
		//thuc hien truy van
		$query = $db->query("select * from products where category_id = $category_id");
		//tra ve so luong ban ghi
		return $query->rowCount();
	}
	//lay 1 ban ghi category
	public function getCategory($category_id)
	{
		//lay bien ket noi csdl
		$db = Connection::getInstance();
		//thuc hien truy van
		$query = $db->query("select * from categories where id = $category_id");
		//tra ve tat ca cac ban ghi lay duoc tu cau truy van
		return $query->fetch();
	}
	//lay mot ban ghi tuong ung voi id truyen vao
	public function modelGetRecord()
	{
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
		//lay bien ket noi csdl
		$db = Connection::getInstance();
		//chuan bi truy van
		$query = $db->prepare("select * from products where id=:var_id");
		//thuc thi truy van, co truyen tham so vao cau lenh sql
		$query->execute(["var_id" => $id]);
		//tra ve mot ban ghi
		return $query->fetch();
	}
	public function getProductsByCategory($id)
	{
		$db = Connection::getInstance();
		$query = $db->query("select * from where category_id = {$id} order by id desc");
		return $query->fetchAll();
	}
	public function modelHotProduct()
	{
		$db = Connection::getInstance();
		$query = $db->query("select * from products order by id desc limit 0,6");
		return $query->fetchAll();
	}
}