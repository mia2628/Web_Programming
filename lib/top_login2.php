    <div id="logo"><a href="C:/APM_Setup/htdocs/index.php"><img src="C:\APM_Setup\htdocs\lib\study1.png" border="0"></a></div>
	<div id="moto"><img src=""></div>
	<div id="top_login">
<?
    if(!$userid)
	{
?>
          <a href="../login/login_form.php">로그인</a> | <a href="../member/member_form.php">회원가입</a>
<?
	}
	else
	{
?>
		<?=$usernick?> (level:<?=$userlevel?>) | 
		<a href="../login/logout.php">로그아웃</a> | <a href="../login/member_form_modify.php">정보수정</a>
<?
	}
?>
	 </div>
