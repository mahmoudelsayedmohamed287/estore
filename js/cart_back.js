$(document).ready(function(){
  var shoppingCart = (function() {
  // =============================
  // Private methods and propeties
  // =============================
   
   cart = [];
     
   // Constructor
  function Item(name, price, count,id,image) {
    this.name  = name;
    this.price = price;
    this.count = count;
    this.id    = id;
    this.image = image
    
  
  }
  
  function saveCart()
  {
  localStorage.setItem('cart', JSON.stringify(cart));
  }
  
  function loadCart() {
      cart = JSON.parse(localStorage.getItem('cart'));
    }
    if (localStorage.getItem("cart") != null) {
      loadCart();
    }
  
  // =============================
  // Public methods and propeties
  // =============================
  var obj = {};
  
  obj.addItemToCart =  function(name, price, count,id,image){
    for(i in cart){
      if(cart[i].id == id ){
        cart[i].count ++;
        saveCart()
        return
      }
    }
    var item = new Item(name, price, count,id,image);
    cart.push(item);
    saveCart();
  }
  
  obj.listCart = function() {
      var cartCopy = [];
      for(i in cart) {
        item = cart[i];
        itemCopy = {};
        for(p in item) {
          itemCopy[p] = item[p];
  
        }
        itemCopy.total = Number(item.price * item.count).toFixed(2);
        cartCopy.push(itemCopy)
      }
      return cartCopy;
    }
  
    obj.removeItemFromCartAll = function(id) {
      for(var item in cart) {
        if(cart[item].id === id) {
          cart.splice(item, 1);
          break;
        }
      }
      saveCart();
    }
      // Remove item from cart
      obj.removeItemFromCart = function(id) {
          for(var item in cart) {
            if(cart[item].id === id) {
              cart[item].count --;
              if(cart[item].count === 0) {
                cart.splice(item, 1);
              }
              break;
            }
        }
        saveCart();
      }
  obj.totalCount = function(){
    totalcount = 0;
    for(var item in cart){
      totalcount += cart[item].count;
    }
    return totalcount;
  }
  
  obj.clearCart = function(){
    cart = [];
    saveCart();
  }
  
  obj.totalCountCart = function(){
    total = 0;
    for(var count in cart){
      total += cart[count].count * cart[count].price;
    }
    return total;
  }
  
  return obj;
  })();
  
  
  function add(name,price,id,image)
  {
      shoppingCart.addItemToCart(name,price, 1, id,image);
    
  //   dispalyItemInCart()
  }
  
  
  
  $('.addItemTocart').click(function(){
    var id   = $(this).data('id');
    var name = $(this).data('name');
    var price= $(this).data('price');
    var image= $(this).data('image');
    shoppingCart.addItemToCart(name,price, 1, id,image);
  
    
    dispalyItemInCart()
    
  })
  
  
  function dispalyItemInCart(){
      dataInStorage = JSON.parse(localStorage.getItem('cart') );
      
      var output = "";
      var productIds = [] ;
      var checkOutput = "";
       for(i in dataInStorage){
           var total = dataInStorage[i].price * dataInStorage[i].count;
          output+=  `
          <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="${dataInStorage[i].image}" alt="">
                                            </div>
                                            <div class="media-body">
                                                <p>${dataInStorage[i].name}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$${dataInStorage[i].price}</h5>
                                    </td>
                                    <td>
                                        <div class="product_count">
                                            <input type="text" name="qty" id="sst" maxlength="12" value="${dataInStorage[i].count}" title="Quantity:"
                                                class="input-text qty">
                                            <button class="increase items-count"data-price="${dataInStorage[i].price}" data-id="${dataInStorage[i].id}" data-name=${dataInStorage[i].name} type="button"><i class="lnr lnr-chevron-up"></i></button>
                                            <button class="reduced items-count" data-price="${dataInStorage[i].price}" data-id="${dataInStorage[i].id}" data-name=${dataInStorage[i].name} type="button"><i class="lnr lnr-chevron-down"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <h5>$ ${total} </h5>
                                    </td>
                                    <td>
                                        <button class="delete-item" data-id="${dataInStorage[i].id}">Delete</button>
                                    </td>
                                </tr>`;
  
  
        productIds.push(dataInStorage[i].id);
        checkOutput+=  `
                    <li><a href="#">${dataInStorage[i].name}
                    <span class="middle">x${dataInStorage[i].count} </span> 
                    <span class="last">$${dataInStorage[i].price}</span></a></li>
        `
          
        }
        output+= `
  
                       
                              
        <tr class="bottom_button">
        <td>
            <a class="gray_btn" href="#">Update Cart</a>
        </td>
        <td>
  
        </td>
        <td>
  
        </td>
        <td>
            <div class="cupon_text d-flex align-items-center">
                <input type="text" placeholder="Coupon Code">
                <a class="primary-btn" href="#">Apply</a>
                <a class="gray_btn" href="#">Close Coupon</a>
            </div>
        </td>
    </tr>
    <tr>
        <td>
  
        </td>
        <td>
  
        </td>
        <td>
            <h5>Subtotal</h5>
        </td>
        <td>
            <h5 class="totalCart"></h5>
        </td>
    </tr>
  
  
    <tr class="shipping_area">
        <td>
  
        </td>
        <td>
  
        </td>
        <td>
            <h5>Shipping</h5>
        </td>
        <td>
            <div class="shipping_box">
                <ul class="list">
                    <li><a href="#">Flat Rate: $5.00</a></li>
                    <li><a href="#">Free Shipping</a></li>
                    <li><a href="#">Flat Rate: $10.00</a></li>
                    <li class="active"><a href="#">Local Delivery: $2.00</a></li>
                </ul>
                <h6>Calculate Shipping <i class="fa fa-caret-down" aria-hidden="true"></i></h6>
                <select class="shipping_select">
                    <option value="1">Bangladesh</option>
                    <option value="2">India</option>
                    <option value="4">Pakistan</option>
                </select>
                <select class="shipping_select">
                    <option value="1">Select a State</option>
                    <option value="2">Select a State</option>
                    <option value="4">Select a State</option>
                </select>
                <input type="text" placeholder="Postcode/Zipcode">
                <a class="gray_btn" href="#">Update Details</a>
            </div>
        </td>
    </tr>
    <tr class="out_button_area">
        <td>
  
        </td>
        <td>
  
        </td>
        <td>
  
        </td>
        <td>
            <div class="checkout_btn_inner d-flex align-items-center">
                <a class="gray_btn" href="#">Continue Shopping</a>
              
            </div>
        </td>
    </tr>
        `;
        checkOutput+= `
        <ul class="list list_2">
            <li><a href="#">Subtotal <span>${shoppingCart.totalCountCart()}</span></a></li>
            <li><a href="#">Shipping <span>Flat rate: $50.00 static price </span></a></li>
            <li><a href="#">Total <span>${shoppingCart.totalCountCart()}</span></a></li>
        </ul>
        `;
       
  
        $("#productCheckOut").html(checkOutput);
        $("#cartContentt").html(output);
        $('.bag-total').text(shoppingCart.totalCount());
        $('.totalCart').text(shoppingCart.totalCountCart());
        $('#checkouttotal').val(shoppingCart.totalCountCart() * 100);
        $('#productIds').val(productIds);
      
      }
  
  // -1
  $('#cartContentt').on("click", ".reduced", function(event) {
    var id = $(this).data('id');
    // var name = $(this).data('name');
    // var price = $(this).data('price');
      shoppingCart.removeItemFromCart(id);
      dispalyItemInCart()
    })
    // +1
    $('#cartContentt').on("click", ".increase", function(event) {
      var id    = $(this).data('id');
      var name  = $(this).data('name');
      var price = $(this).data('price');
      var image = $(this).data('image');
      shoppingCart.addItemToCart(name,price,1,id,image);
      dispalyItemInCart()
    })
  
   
  
    $('#cartContentt').on("click", ".delete-item", function(event) {
      var id = $(this).data('id');
      shoppingCart.removeItemFromCartAll(id);
      dispalyItemInCart()
    })
  
    $('.clear-cart').click(function(){
      shoppingCart.clearCart();
      dispalyItemInCart()
    })
  
  dispalyItemInCart()
  
  // var addButton = document.getElementsByClassName('addItemTocart');
  
  // for(var i = 0 ; i < addButton.length; i++ ){
  // 	var name  = this.data('name');
  // 	var price = Number(this.data('price'));
  // 	var id    = this.date('id');
  // 	addButton[i].addEventListener("click", obj.addItemToCart(name,price, 1, id));
  // }
  
  });
  
  