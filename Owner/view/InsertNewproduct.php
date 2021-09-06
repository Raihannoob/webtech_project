<?php
$title = "Insert New Product";
include('header.php');


?>

<td>
    <h1 id="h1">Insert New Product </h1>
    <fieldset>

        <form action='../controller/insertnewproductcheck.php' method='post' onsubmit="return validateform()">
            <script type="text/javascript" src="insertproduct.js"></script>
            <table>
                <tr>
                    <td>
                        Product Name:
                    </td>
                    <td>
                        <input type="text" name='ProductName' id='pname' onkeyup="productNameValidation()">
                        <span id="spname" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Product Type:
                    </td>
                    <td>
                        <input type="text" name='ptype' id="ptype" onkeyup="ProductTypeValidate()">
                        <span id="sptype" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Mannufacture:
                    </td>
                    <td>
                        <input type="text" name='Mannufacture' id='Mannufacture' onblur="MannufactureValidate()">
                        <span id="sMannufacture" style="color:red"> </span>
                    </td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td>
                        Stock:
                    </td>
                    <td>
                        <input type="text" name='Stock' id='Stock' onblur="QuantityValidate()">
                        <span id="sStock" style="color:red"> </span>
                    </td>

                </tr>
                <tr>
                    <td>
                        MRP:
                    </td>
                    <td>
                        <input type="text" name='MRP' id="MRP" onblur=" mrpValidate()">
                        <span id="sMRP" style="color:red"> </span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type='submit' name='submit' value='submit'>
                        <input type='Reset' value='Reset'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</td>
</tr>
</table>
<fieldset>
    <?php
    include('footer.php');
    ?>