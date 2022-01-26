@include("layouts.header_meta")
<body class="login-page" style="min-height: 496.391px;">
	<div class="login-box">
	  <div class="login-logo">
	    <a href=""><b>AGEN</b> CARGOMURAH</a>
	  </div>
	  <div class="card">
	    <div class="card-body login-card-body">
	      <form class="form-login">
	        <div class="input-group mb-3">
	          <input type="text" class="form-control" required name="username" placeholder="Username">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
	        </div>
	        <div class="toast"></div>
	        <div class="input-group mb-3">
	          <input type="password" class="form-control" required name="password" placeholder="Password">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-12">
	            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
	          </div>
	        </div>
	      </form>	    
	    </div>
	  </div>
	</div>
</body>

@include("layouts.footer_meta")


<script type="text/javascript">
    $("document").ready(function(){
        
    });
</script>	


@include("inc.ajax")