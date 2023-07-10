<!-- Content Header -->
<div class="content-header">
	<div class="navbar navbar-inverse">
	  <div class="navbar-inner">
	    <a class="brand" href="<?=site_url("/")?>">The Articles</a>
	    <ul class="nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">My Articles</a></li>
	    </ul>
	    <!-- login status -->
	    <?php if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ ?>
		<ul class="nav pull-right">
          <li><a href="#">Hi <?=$_SESSION["user"]->Account?></a></li>
          <li class="divider-vertical"></li>
          <li><a href="<?=site_url("user/logout")?>">登出</a></li>   
          <?
          // 需在 Welcome.php session_start(); HA HA 2023/7/9 Andy@Home
          //welcome那一頁不是user這個Controller 所以唯獨這一頁 要在welcome_message.php加上  session_start()   
          ?>
        </ul>
        <?php }else{ ?> 
		<ul class="nav pull-right">
          <li><a href="<?=site_url("user/login")?>">登入</a></li>
          <li class="divider-vertical"></li>
          <li><a href="<?=site_url("user/register")?>">註冊</a></li>
        </ul>        
        <?php } ?>
	  </div>
	</div>
</div>