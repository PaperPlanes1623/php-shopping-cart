<?php 

function component($productname, $productprice, $productimage){
  $element = "
  <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
      <form action=\"index.php\" method=\"post\">
        <div class=\"card shadow\">
          <div>
            <img src=\"$productimage\" alt=\"image1\" class=\"img-fluid card-img-top\">
          </div>
          <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <h6>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"far fa-star\"></i>
            </h6>
            <p class=\"card-text\">Some quick example text to build on card</p>
            <h5>
            <small><s class=\"text-secondary\">$2000</s></small>
              <span class=\"price\">$productprice</span>
            </h5>
            <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">Add to Cart <i class=\"fas fa-shopping cart\"></i></button>
          </div>
        </div>
      </form>
    </div>
  ";
  echo $element;
}