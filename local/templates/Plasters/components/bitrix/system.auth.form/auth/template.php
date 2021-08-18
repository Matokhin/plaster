<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>



<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

	

<?if($arResult["FORM_TYPE"] == "login"):?>
<div class="auth">
	<span class="authorization">Вход</span>
	<a href="#" class="registration">Регистрация</a>
</div>
<div class="auth_form">
			<div class="form_head">
				Вход в личный кабинет
			</div>
<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<div class="form-control">
					<div class="form-info">
						<label for=""><?=GetMessage("AUTH_LOGIN")?></label><br>
						<input type="text" name="USER_LOGIN" class="form-input">
					</div>
					
				</div>
			<script>
				BX.ready(function() {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie)
					{
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
			<div class="form-control">
					<div class="form-info">
						<label for=""><?=GetMessage("AUTH_PASSWORD")?></label><br>
						<input class="form-input" name="USER_PASSWORD" type="password">
					</div>
				</div>
<?if ($arResult["STORE_PASSWORD"] == "Y"):?>		
<input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
 <label for="USER_REMEMBER_frm" class="store"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
 <noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow" class="forgot_password"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a></noindex><br>
 
<?endif?>


<?if ($arResult["CAPTCHA_CODE"]):?>
	<?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br />
	<input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>" />
	<img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" /><br /><br />
	<input type="text" name="captcha_word" maxlength="50" value="" /></td>
<?endif?>
<button class="show_button confirm form-info" name="confirm" type="submit"><?=GetMessage("AUTH_LOGIN_BUTTON")?></button>


<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
<noindex><a href="<?=$arResult["AUTH_REGISTER_URL"]?>" class="drop_button close" rel="nofollow" ><?=GetMessage("AUTH_REGISTER")?></a></noindex>		
<?endif?>
</form>
</div>



<?
else:
?>
<div class="auth">
<form action="<?=$arResult["AUTH_URL"]?>">
	<table width="95%">
		<tr>
			<td align="center">
				[<?=$arResult["USER_LOGIN"]?>]<br />
				<a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
			</td>
		</tr>
		<tr>
			<td align="center">
			<?foreach ($arResult["GET"] as $key => $value):?>
				<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
			<?endforeach?>
			<?=bitrix_sessid_post()?>
			<input type="hidden" name="logout" value="yes" />
			<input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" class="show_button" style="border: none; cursor: pointer;" />
			</td>
		</tr>
	</table>
</form>
</div>
<?endif?>













