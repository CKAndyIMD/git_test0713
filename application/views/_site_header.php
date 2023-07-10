<html >

	<meta charset="utf-8">
	<title><?php 
        //isset() 函数用于检测变量是否已设置并且非 NULL。
		if(isset($pageTitle)){ 
			echo $pageTitle ; //透過變數設定
		} else{ 
			echo "發文系統" ; //預設標題
		} 
	?></title>
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?=base_url("/css/bootstrap-responsive.min.css")?>">