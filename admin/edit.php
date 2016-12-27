<?
include "../inc/config.php";

$edit = "select * from products where sku = '$_GET[sku]'";
$hasil = mysql_query($edit);
$r= mysql_fetch_array($hasil);

echo<h2>edit user</h2>

<form method="post" action="update.php">
                <table>
                    <tr>
                        <th>
                            <label>name</label>
                        </th>
                        <td>
                            <input required="required" type="text" name="name" id="name"\>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>img</label>
                        </th>
                        <td>
                            <input required="required" type="img" name="img" id="img"\>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>price</label>
                        </th>
                        <td>
                            <input required="required" type="price" name="price" id="price"\>
                        </td>
                    </tr>
					<tr>
                        <th>
                            <label>paypal</label>
                        </th>
                        <td>
                           <input required="required" type="paypal" name="paypal" id="paypal"\>
                        </td>
                    </tr>               
                </table>
                <input type="submit" value="update">
				<input type="button" value="batal">
            </form>
?>