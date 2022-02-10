<?php
//include file model vao day
include "models/ProductsModel.php";
class ProductsController extends Controller
{
	//ke thua class ProductsModel
	use ProductsModel;
	public function category()
	{
		$category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
		//quy dinh so ban ghi tren mot trang
		$recordPerPage = 20;
		//tinh so trang
		//ham ceil(so) se lay gia tri lam tron tren cua so do. VD: ceil(3.1) = 4
		$numPage = ceil($this->modelTotalRecord() / $recordPerPage);
		//lay du lieu tu model
		$data = $this->modelRead($recordPerPage);
		//goi view, truyen du lieu ra view
		$this->loadView("CategoryProductsView.php", ["data" => $data, "numPage" => $numPage, "category_id" => $category_id]);
	}
	//Chi tiết sản phẩm
	public function detail()
	{
		$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
		$record = $this->modelGetRecord($id);
		//gọi view , truyền dữ liệu ra view
		$this->loadView("DetailProductsView.php", ["record" => $record, "id" => $id]);
	}
}