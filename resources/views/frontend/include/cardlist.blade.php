@extends('frontend.frontendmain')
@section('content')

<div class="main-banner header-text">
		<div class="container-fluid">
			<div class="owl-banner owl-carousel">
				<div class="item">
					<img src="frontendfood/images/C1.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>JUICE</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c4.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>SWEETS</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c2.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>DRINKS</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c3.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>SNACKS</h1>
							</div>

						</div>
					</div>
				</div>

				<div class="item">
					<img src="frontendfood/images/c5.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>CAKE</h1>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

  <div id="cardlist" class="col-lg-12 order-xl-1 " style="margin-top: 4%;">
  <div class="card p-4 m-4" >
    <div class="card-header" style="background-color: black;">
      <div class="row align-items-center">
        <div class="col-12" > 
          <h3 style="color: #fb6e14; font-size: 18px;"   class="mb-0"> <i class="fas fa-arrow-down"></i>ITEMS </h3>
          
        </div>
      
      </div>
    </div>
    


  <div class="card-body ">
    <h1 style="margin-top: 1%;  font-size: 18px;"  >Items you Choosed in Cart</h1>
    <table class="table table-bordered  "  >
  <thead>
    <tr style="font-size: 12px; color: #fb6e14;font-weight:bold; font-weight: 900;">
      <th scope="col">S.N.</th>
      <th scope="col">IMAGE</th>
      <th scope="col">TITLE</th>
      <th scope="col">PRICE</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
  <tbody>
    <tr style="font-size: 14px; font-weight: 900;">
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
     <td> <a href="" style="text-decoration: none; color: #fb6e14 ;" ><i class="fa fa-trash"></i>REMOVE FROM CART</a></td>
     
    </tr>
  
    
  </tbody>
</table>

 <a href="" style="text-decoration: none;background-color: #fb6e14;  color:white; margin-top:3%;" class=" btn "><i class="fas fa-hand-point-right"></i>ORDER NOW</a>
  </div>
  
  </div>
  </div>

 

       


     
@endsection