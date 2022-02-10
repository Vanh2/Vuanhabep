<?php
include "models/HomeModel.php";
class HomeController extends Controller
{
    use HomeModel;
    public function index()
    {
        $products1 = $this->getProductByCategory(2);
        $products2 = $this->getProductByCategory(7);
        $products3 = $this->getProductByCategory(8);
        $s1 = $this->Section(5);
        $s2 = $this->Section(9);
        $s3 = $this->Section(10);
        $this->loadView("HomeView.php", [
            'data1' => $products1,
            'data2' => $products2,
            'data3' => $products3,
            "d1" => $s1,
            "d2" => $s2,
            "d3" => $s3
        ]);
    }
}