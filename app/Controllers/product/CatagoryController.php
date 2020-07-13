<?php

include "app/Models/product/CategoryModel.php";


class CatagoryController{
  
   
    public function __construct()
    {
        $this->model = new CategoryModel();
        

    }
    public function index()
    {
       
        $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5; //movies per page
        $page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
        $links = 5;
        $paginator =  new Paginator('products','pagination');
        $results = $paginator->getData($limit,$page);


        $pages =  $paginator->createLinks( $links, 'pagination' );
       
    return $this->model->render('product/category',compact('pages','links','results'));

        
    }


    public function search()
    {
        $result = 'SELECT * FROM products WHERE quantity > 0';
        if(isset($_POST['action'])){
            if(isset($_POST['brands']) && !empty($_POST['brands'])){
                   $brands = implode(',' ,$_POST['brands']);
            
                   $result .= " AND brand_id IN ($brands)";
            }
            if(isset($_POST['categorys']) && !empty($_POST['categorys'])){
                   $categorys = implode(',' ,$_POST['categorys']);
                
                   $result .= " AND tag_id IN ($categorys)";
                }
            if(isset($_POST['lowerValue'], $_POST['upperValue']) && !empty($_POST['lowerValue']) && !empty($_POST['upperValue'])){

                    $result .= " AND price_after BETWEEN '".$_POST['lowerValue']."'  AND '" .$_POST['upperValue'] ."'";
                }
            if(isset($_POST['sorter']) && !empty($_POST['sorter'])){
                if($_POST['sorter'] == 'price'){
                    $result .= " ORDER BY  price_after";
                }
                if($_POST['sorter'] == 'new'){
                    $result .= " ORDER BY id DESC";
                }
            }
            if(isset($_POST['show']) && !empty($_POST['show'])){
                $result .= " LIMIT  " .$_POST['show'] ."";
            }
            if(isset($_POST['searchProduct']) && !empty($_POST['searchProduct'])){
                $search  = "%".$_POST['searchProduct']."%"; 
                $result .= " AND  title LIKE '" . $search."' ";
                die($result);
    
             }
        // action 
           
            

            $products = $this->model->filterProducts($result);
            $output ='';
            if(count($products) > 0){
                foreach($products as $product){
                    $output .= '
                    <div class="col-lg-4 col-md-6">
                    <div class="single-product searchResult">
                      <form id="frmCart">
                        <img class="img-fluid" id="product_image" src='. URL.$product->image.' alt="">
                        <div class="product-details">
                            <h6>"'.$product->title .'"</h6>
                            <div class="price">
                                <h6>$"'. $product->price_after .'" </h6>
                                <h6 class="l-through">$"'.$product->price_before .'" </h6>
                                <input type="hidden" id="quantity"  value="1">
                                
                            </div>
                            <div class="prd-bottom">
                                   
                                <a class="social-info addItemTocart" 
                                data-id="'. $product->id .'" 
                                data-name="'. $product->title .'"
                                data-price="'. $product->price_before .'"
                                data-qnty="1"
                                data-image="'.  URL .'/img/product/'.$product->image .'">
                                    <span class="ti-bag"></span>
                                    <p class="hover-text">add to bag</p>
                                    
                                </a>
                            
                                <a href="" class="social-info">
                                    <span class="lnr lnr-heart"></span>
                                    <p class="hover-text">Wishlist</p>
                                </a>
                                <a href="" class="social-info">
                                    <span class="lnr lnr-sync"></span>
                                    <p class="hover-text">compare</p>
                                </a>
                                <a href="'.  URL . 'product/Product/'. $product->id.'" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">view more</p>
                                </a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
    ';
                  
                }
            }else{
                $output = '<h3>no result found</h3>'; 
            }
            
        
     
        }

    echo $output;
    }

    public function serachByProduct()
    {
       
if(isset($_GET['s'])){
    
    $output ='';
   $products =  $this->model->retriveProducts( $_GET['s']);

   if(count($products) > 0){
    foreach($products as $product){
        $output .= '
        <div class="col-lg-4 col-md-6">
        <div class="single-product searchResult">
          <form id="frmCart">
            <img class="img-fluid" id="product_image" src='. URL.$product->image.' alt="">
            <div class="product-details">
                <h6>"'.$product->title .'"</h6>
                <div class="price">
                    <h6>$"'. $product->price_after .'" </h6>
                    <h6 class="l-through">$"'.$product->price_before .'" </h6>
                    <input type="hidden" id="quantity"  value="1">
                    
                </div>
                <div class="prd-bottom">
                       
                    <a class="social-info addItemTocart" 
                    data-id="'. $product->id .'" 
                    data-name="'. $product->title .'"
                    data-price="'. $product->price_before .'"
                    data-qnty="1"
                    data-image="'.  URL .'/img/product/'.$product->image .'">
                        <span class="ti-bag"></span>
                        <p class="hover-text">add to bag</p>
                        
                    </a>
                
                    <a href="" class="social-info">
                        <span class="lnr lnr-heart"></span>
                        <p class="hover-text">Wishlist</p>
                    </a>
                    <a href="" class="social-info">
                        <span class="lnr lnr-sync"></span>
                        <p class="hover-text">compare</p>
                    </a>
                    <a href="'.  URL . 'product/Product/'. $product->id.'" class="social-info">
                        <span class="lnr lnr-move"></span>
                        <p class="hover-text">view more</p>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
';
      
    }
}else{
    $output = '<h3>no result found</h3>'; 
}



}
echo $output;




    

        
    }

}