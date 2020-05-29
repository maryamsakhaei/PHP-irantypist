<?php
include_once("header.php");
include_once('top-menu.php');
?>
<form class='order'>
    <table>
    <tbody>
    <tr valign='middle'>
        <td width='150px'>زبان</td>
        <td>
        <select name='language' class='form-control language'>
			<option value=''>--انتخاب کنید--</option>
			<option type='combobox' value='fa'>فارسی  </option>
			<option type='combobox' value='en'> انگلیسی</option>
			<option type='combobox' value='du'> آلمانی</option>
			<option type='combobox' value='russian'> روسی</option>
			<option type='combobox' value='arab'>عربی </option>
			<option type='combobox' value='spain'> اسپانیایی </option>
			<option type='combobox' value='turky'>ترکی استانبولی</option>
			<option type='combobox' value='kurdi'>کردی</option>
        </select>
        <img src='image/question.png'>
        <font color='red'>*</font>
        </td>
    </tr>
</form>
<?php
include_once("footer.php");

?>