<?php
include "header.php";
?>
<p align="center">Selamat Datang<br />
    Didatabase </p>
    <p align="center">Anda Harus Login Terlebih Dahulu</p>      
      <table align="center"><form action=cek_login.php method=POST>
        <tr>
          <td width="100">Username</td>
          <td width="20">&nbsp;</td>
          <td width="100"><input type=text name=username></td>
        </tr>
        <tr>
          <td>Password</td>
          <td>&nbsp;</td>
          <td><input type=password name=sandi></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type=submit value=login></td>
          
        </tr>
		</form>
      </table>
<?php
include "footer.php";
?>