$(document).ready(function(){


  
    var whichList = (function() {
    // =============================
    // Private methods and propeties
    // =============================
     
    
    whichProduct= [];
       
     // Constructor
    function Item(name, price,id,image) {
      this.name  = name;
      this.price = price;
      this.id    = id;
      this.image = image;
      
    }
    
    function saveCart()
    {
      sessionStorage.setItem('whichProduct', JSON.stringify(whichProduct));
    }
    
    function loadCart() {
        whichProduct = JSON.parse(sessionStorage.getItem('whichProduct'));
      }
      if (sessionStorage.getItem("whichProduct") != null) {
        loadCart();
      }
    
    // =============================
    // Public methods and propeties
    // =============================
    var obj = {};
    
    obj.additem =  function(name, price,id,image){

    
      var item = new Item(name, price,id,image);
      whichProduct.push(item);
      saveCart();
    }
    
    obj.listCart = function() {
        var cartCopy = [];
        for(i in whichProduct) {
          item = whichProduct[i];
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
        for(var item in whichProduct) {
          if(whichProduct[item].id === id) {
            whichProduct.splice(item, 1);
            break;
          }
        }
        saveCart();
      }
        // Remove item from cart
        obj.removeItemFromCart = function(id) {
    
            for(var item in whichProduct) {
              if(whichProduct[item].id === id) {
         
                  whichProduct.splice(item, 1);
                
                break;
              }
          }
          saveCart();
        }

    obj.totalCount = function(){
      totalcount = 0;
      for(var item in whichProduct){
        totalcount += whichProduct[item].count;
      }
      return totalcount;
    }
    
    // obj.clearCart = function(){
    //   cart = [];
    //   saveCart();
    // }
    
    obj.totalCountCart = function(){
      total = 0;
      for(var count in whichProduct){
        total += whichProduct[count].count * cart[count].price;
      }
      return total;
    }
    
    return obj;
    })();
    
    
   
    
    
    $('.addItemToWhichList').click(function(e){
      e.preventDefault();
      var id   = $(this).data('id');
      var name = $(this).data('name');
      var price= $(this).data('price');
      var image= $(this).data('image');


      for(i in whichProduct){
        if(whichProduct[i].id == id){
          whichList.removeItemFromCart(id);
          
          $(this).removeClass('whichlistColor');
          
          determindBgColorForWhichList() 
          dispalyItemInCart()
          location.reload();
          return
       
        }
        
      }
  
      whichList.additem(name,price, id,image);
    
      determindBgColorForWhichList() 
      dispalyItemInCart();
    



     
    
      
     
      
    })
    
    
    function dispalyItemInCart(){
        dataInStorage = JSON.parse(sessionStorage.getItem('whichProduct') );
      var output = '';
        
         for(i in dataInStorage){
           
            output+=  `
            <tr>
                                      <td>
                                          <div class="media">
                                              <div class="d-flex">
                                                  <img width="50" src="${dataInStorage[i].image}" alt="">
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
                                          <button class="delete-whichlist"  data-id="${dataInStorage[i].id}"><span class="lnr lnr-heart"></span></button>
                                      </td>
                                  </tr>`;
                        

          }
          
          $("#whichListContent").html(output);

        }
    

    
     
    
      $('#whichListContent').on("click", ".delete-whichlist", function(event) {
        
        var id = $(this).data('id');
        whichList.removeItemFromCartAll(id);
        dispalyItemInCart();
      });
    
      $('.clear-cart').click(function(){
        whichList.clearCart();
        dispalyItemInCart()
      })
      
function determindBgColorForWhichList()
{

  $('.addItemToWhichList').each(function (){
     for(i in whichProduct){
      if(whichProduct[i].id == $(this).data('id')){
        $(this).find('span').css('background','black');}
      // }else{
      //   $(this).find('span').css('background','#828bb2');
      // }
    
  }

  })
}
determindBgColorForWhichList() 
    dispalyItemInCart()
    
 
    
    });
    
    
           
    
      
    