<?php include("_site_header.php"); ?>
<div class="container">
	<?php include("_content_nav.php") ?>  <?php /* include content_nav  */ ?>
	<div class="content">
	<form action="<?=site_url("/user/registering")?>" method="post"  >
		<?php  if (isset($errorMessage)){?>
		<div class="alert alert-error">
			<?=$errorMessage?>
		</div>
		<?php }?>
		<table class="table table-bordered">
			<tr>
				<td>
					Account
				</td>
				<td>
					<?php if(isset($account)){ ?>
					<input type="text" name="account" value="<?=htmlspecialchars($account)?>" />
					<?php }else{ ?>
					<input type="text" name="account" />
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="password" name="password" />
				</td>
			</tr>
			<tr>
				<td>
					Re-type Password
				</td>
				<td>
					<input type="password" name="passwordrt" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input class="btn" type="submit" value="按我執行註冊" />
				</td>
			</tr>
        </table>
        <table>
            <tr>
                <td>
                -------------------------------------------
            </tr>
            <tr>
                <td>
                echo base_url("/user/registering"); =>>
                <?php
                echo base_url("/user/registering");
                ?>
            </tr>
            <tr>
                <td>
                echo site_url("/user/registering"); =>>
                <?php
                echo site_url("/user/registering");
                ?>
            </tr>
            <tr>
                <td>
                要使用上述2個函數需
                編輯自動載入設定檔：
                application/config/autoload.php
                修改helper的設定
                $autoload['helper'] = array();
                 </td>
            </tr>
		</table>
	</form>
</div>

<?php include("_site_footer.php"); ?>