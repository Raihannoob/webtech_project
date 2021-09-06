<?php
$title = "Data Base System";
include('header.php');
?>
<td>
    <script type="text/javascript" src="searchproduct.js"></script>
    <h1 id="myh1">Search Product </h1>
    <input type="text" name="" id="name" onkeyup="ajax()" />
    <input type="button" name="" value="search" onclick="ajax()">

    <div id="result"></div>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>