
<html lang="en">
    <head>
		<title>Aladin Live Stream</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://cdn.agora.io/sdk/web/AgoraRTCSDK-2.8.0.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="{{asset('livestream/css/style.css')}}"/>
    </head>
    <body>
			<div class="container mt-5">
				<div class="col-lg-12">
					<div class="row">
                
                <div class="col-lg-9">
                	<div class="col-md-6">
					<div class="bg bg-black" style="height: 40px; margin: 0px 0px 10px 0px; ">
						<div class="row">
						<img src="{{asset('livestream/images/user.jpg')}}" style="height: 40px; width:40px; border-radius: 50px; border:solid 3px #F8F9F9; margin: 5px 5px 20px 10px;">
                     <p style="margin-top: 10px">Tester</p><small style="font-size: 8px; margin: 20px 0px 0px 5px; color:grey">2021-6-29 08:30:45</small>
					</div>
					<h4 style="margin-top: -20px;">Product are selling now</h4>
					<div id="full-screen-video" style="margin: 0px 0px 0px -10px"></div>

					</div>
			</div>
			<div id="watch-live-overlay">
					<div id="overlay-container">
				

							<div class="col-md text-center" style="margin-top: 130px;">
									<button id="watch-live-btn" type="button" class="btn btn-block btn-primary btn-xlg">
										<i id="watch-live-icon" class="fas fa-broadcast-tower"></i><span>Watch the Live Stream</span>
									</button>
								</div>
					</div>
			</div>

                </div>
                <div class="col-lg-4" style="margin-left: 840px; margin-top: 5px; width: 350px; border: solid #F8F9F9 3px; border-radius: 5px;">
                		<h4>Product</h4>
	<hr>

@if($products->count() < 3)
@foreach($products as $product)
	<div class="row" style="margin-right: 2px;">
	<div class="col-md-12 calpro1">
	<div class="row">
	<div class="col-md-4"><img style="width: 50px; height: 50px" class="proimg" src="{{ $product->non_featured_image }}"></div>
	<div class="col-md-8"><small>{{$product->name}}</small>
	<br>
	<strong>{{$product->name}}</strong><br>
	<small>RM{{$product->price}}</small><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i>

	</div>
	</div>
	</div>
	</div>
@endforeach
@endif
		<hr>
	<div class="row" style="margin-right: 2px;">
	<div class="col-md-12 calpro1">
	<div class="row">
	<div class="col-md-4"><img style="width: 50px; height: 50px" class="proimg" src="{{asset('livestream/images/pepsi.jpg')}}"></div>
	<div class="col-md-8"><small>Pepsi</small>
	<br>
	<strong>Pepsi</strong><br>
	<small>RM3</small><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i>

	</div>
	</div>
	</div>
	</div>
	<hr>
	<div class="row" style="margin-right: 2px;">
	<div class="col-md-12 calpro1">
	<div class="row">
	<div class="col-md-4"><img style="width: 50px; height: 50px" class="proimg" src="{{asset('livestream/images/rtc-logo.png')}}"></div>
	<div class="col-md-8"><small>Galaxy</small>
	<br>
	<strong>Samsung</strong><br>
	<small>RM1300.00</small><i style="margin-left: 10px; height: 25px; width: 25px; border-radius: 50px; background-color: #E5E7E9; color:white; padding: 5px 0px 0px 5px;" class="fa fa-shopping-cart" aria-hidden="true"></i>

	</div>
	</div>
	</div>

	</div>
                	
                </div>
            </div>
            	
				</div>
    <div class="d-flex justify-content-center row" style="margin: 130px 20px 0px -200px; ">
        <div class="col-md-8">
            <div class="d-flex flex-column comment-section" id="myGroup">

                
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12" style="margin-bottom: -10px;">
                    	<div class="col-lg-12">
                    		<div class="row" style="border-bottom:solid 1px #F2F3F4; width: 85% padding-bottom: -10px">
                    			<div class="col-lg-2">
                        <div class="like p-1 cursor"><span class="ml-1"><img style="margin: 0px 0px 3px 0px" src="{{asset('livestream/images/hand-thumbs-up.svg')}}"><small class="badge badge-primary" style="border-radius: 10px">47</small></span></div>
                    </div>
                    <div class="col-lg-7" style="padding-top: 5px;">
                        <div href="#collapse-1"><small class="badge badge-primary" style="border-radius: 10px">43</small><img  style="margin: 0px 2px 3px 3px" src="{{asset('livestream/images/chat-dots.svg')}}"><span class="ml-1"></span></div>
                    </div><div class="col-lg-2" style="padding-top: 5px;">
                        <div href="#collapse-1"><small class="badge badge-primary" style="border-radius: 10px">34</small><img style="margin: 0px 3px 3px 3px" src="{{asset('livestream/images/eye.svg')}}"><span class="ml-1"></span></div>
                    </div>
                   
                </div>
                </div>
            </div>
        </div>
      
                <div class="bg-white p-2">
                    <div class="d-flex flex-row fs-12">
                    	<div class="col-lg-12">
                    		<div class="row">
                    			<div class="col-lg-2">
                        <div class="like p-1 cursor"><span class="ml-1">Like</span></div>
                    </div>
                    <div class="col-lg-7" style="margin-top: -2px;">
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-1" href="#collapse-1"><span class="ml-1">Comment</span></div>
                    </div>
                    <div class="col-lg-2">
                        <div class="like p-2 cursor action-collapse" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-2" href="#collapse-2"><i class="fa fa-share"></i><span class="ml-1">Share</span></div></div>
                    </div>
                </div>
                </div>
            </div>
              <form method="post" action="{{url('streaming')}}">
                        @csrf
                <div id="collapse-1" class="bg-light p-2 collapse" data-parent="#myGroup">
                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40"><textarea style="border-radius: 50px; height: 40px; padding: 2px 20px 0px 10px;" name="body" class="form-control shadow-none textarea"></textarea></div>
                    <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="submit">Post comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none" type="button">Cancel</button></div>
                </div>
</form>
                <div id="collapse-2" class="p-2 collapse" data-parent="#myGroup">
                    <div class="d-flex flex-row align-items-start float-right">
                      <a href=""  class="border p-2 rounded mr-1"><img src="{{asset('livestream/images/facebook.svg')}}" style="height: 25px; width: 25px; border-radius: 50px;"></a>
                       <a href=""  class="border p-2 rounded mr-1"><img src="{{asset('livestream/images/instagram.svg')}}" style="height: 25px; width: 25px; border-radius: 50px;"></a>
                        <a href=""  class="border p-2 rounded mr-1"><img src="{{asset('livestream/images/whatsapp.svg')}}" style="height: 25px; width: 25px; border-radius: 50px;"></a>
                        <a href=""  class="border p-2 rounded mr-1"><img src="{{asset('livestream/images/telegram.svg')}}" style="height: 25px; width: 25px; border-radius: 50px;"></a>
                    	</div>
                </div>
                <div class="overflow-auto">
                
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Lisa</span><span class="date text-black-50">Shared publicly - </span></div>
                    </div>
                    
                    <div class="mt-2">
                        <p class="comment-text">sfsdf</p>
                    </div>
                  
                   
                
            </div>
        </div>
    </div>
</div>
	</body>
	<style>
		.date {
    font-size: 11px
}

.comment-text {
    font-size: 12px
}

.fs-12 {
    font-size: 12px
}

.shadow-none {
    box-shadow: none
}

.name {
    color: #007bff
}

.cursor:hover {
    color: blue
}

.cursor {
    cursor: pointer
}

.textarea {
    resize: none
}

.fa-facebook {
    color: #3b5999
}

.fa-twitter {
    color: #55acee
}

.fa-linkedin {
    color: #0077B5
}

.fa-instagram {
    color: #e4405f
}

.fa-dribbble {
    color: #ea4c89
}

.fa-pinterest {
    color: #bd081c
}

.fa {
    cursor: pointer
}
		
	</style>
	<script>
		
	</script>
<script src="{{asset('livestream/js/agora-audience-client.js')}}"></script>
</html>
