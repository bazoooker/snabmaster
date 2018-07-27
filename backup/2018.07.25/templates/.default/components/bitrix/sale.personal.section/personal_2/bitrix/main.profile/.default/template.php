<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Localization\Loc;

?>

<div class="data">

	<h1>Личные данные</h1>

	<?
	if ($arResult["strProfileError"]!="") {
	?>
		<div class="user-notice">
			<?
			ShowError($arResult["strProfileError"]);
			?>
		</div>
	<?
	}
	?>

	<?
	if ($arResult['DATA_SAVED'] == 'Y'){
	?>
		<div class="user-notice">
			<?
			ShowNote(Loc::getMessage('PROFILE_DATA_SAVED'));
			?>
		</div>
	<?
	}
	?>
	<form method="post" name="form1" action="<?=$APPLICATION->GetCurUri()?>" enctype="multipart/form-data" role="form">
		<?=$arResult["BX_SESSION_CHECK"]?>
		<input type="hidden" name="lang" value="<?=LANG?>" />
		<input type="hidden" name="ID" value=<?=$arResult["ID"]?> />
		<input type="hidden" name="LOGIN" value=<?=$arResult["arUser"]["LOGIN"]?> />
<table class="form-table user-table">
	<tbody>
		<tr>
			<td class="legend user-table-label">
				<?=Loc::getMessage('NAME')?>
			</td>
			<td>
					<input class="form-control" type="text" name="NAME" maxlength="50" id="main-profile-name" value="<?=$arResult["arUser"]["NAME"]?>" />
			</td>
		</tr>
		<tr>
			<td class="legend user-table-label">
				<?=Loc::getMessage('LAST_NAME')?>
			</td>
			<td>
					<input class="form-control" type="text" name="LAST_NAME" maxlength="50" id="main-profile-last-name" value="<?=$arResult["arUser"]["LAST_NAME"]?>" />
			</td>
		</tr>
		<tr>
			<td class="legend user-table-label">
				<?=Loc::getMessage('SECOND_NAME')?>
			</td>
			<td>
					<input class="form-control" type="text" name="SECOND_NAME" maxlength="50" id="main-profile-second-name" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" />

			</td>
		</tr>
		<tr style="display:none">
			<td class="legend user-table-label">
				<?=Loc::getMessage('EMAIL')?>
			</td>
			<td>
					<input class="form-control" type="text" name="EMAIL" maxlength="50" id="main-profile-email" value="<?=$arResult["arUser"]["EMAIL"]?>" />
			</td>
		</tr>
			<?
			if($arResult["arUser"]["EXTERNAL_AUTH_ID"] == '')
			{
				?>
		<tr>
			<td class="legend user-table-label">
				<?=Loc::getMessage('NEW_PASSWORD_REQ')?>
			</td>
			<td>
						<input class=" form-control bx-auth-input main-profile-password" type="password" name="NEW_PASSWORD" maxlength="50" id="main-profile-password" value="" autocomplete="off"/>
						<div class="user-table-note password-note"><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></div>
			</td>
		</tr>
		<tr>
			<td class="legend user-table-label">
						<?=Loc::getMessage('NEW_PASSWORD_CONFIRM')?>
			</td>
			<td>
						<input class="form-control" type="password" name="NEW_PASSWORD_CONFIRM" maxlength="50" value="" id="main-profile-password-confirm" autocomplete="off" />
			</td>
		</tr>
				<?
			}
			?>

		<tr>
		<tr>
		<td class="legend user-table-label">Телефон:</td>
			<td>
			<input id="PERSONAL_PHONE" type="text" name="UF_PHONE" maxlength="50" value="<?=$arResult["arUser"]["UF_PHONE"]?>" autocomplete="off" placeholder="+7 (___) ___-____">
			</td>
		</tr>
			<td>
			</td>

			<td>
			<input type="submit" name="save" class="bigbutt user-table-button" value="<?=(($arResult["ID"]>0) ? Loc::getMessage("MAIN_SAVE") : Loc::getMessage("MAIN_ADD"))?>">
			</td>
		</tr>
	</table>
	</form>

	</div>
