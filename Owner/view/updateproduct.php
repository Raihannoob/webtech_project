<?php
$title = "Update Product";
include('header.php');
require_once('../model/inventroymodel.php');
$id = $_GET["id"];
$data =  getproductByID($id);




?>
<td>
    <h1 id="h1">Update Product Information </h1>
    <fieldset>
        <form action='../controller/updateproductcheck.php' method='post' onsubmit="return validateform()">
            <script type="text/javascript" src="insertproduct.js"></script>
            <table width='100%'>
                <form action='' method=''>
                    <table>

                        <tr>
                            <td>
                                ID:
                            </td>
                            <td>
                                <input type="text" name='ProductID' value=" <?php echo $data['p_id'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Product Name:
                            </td>
                            <td>
                                <input type="text" name='ProductName' value=" <?php echo $data['p_name'] ?> " id='pname' onblur="productNameValidation()">
                                <span id="spname" style="color:red"> </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Product Type:
                            </td>
                            <td>
                                <input type="text" name='ptype' value="<?php echo $data['p_type'] ?> " id="ptype" onblur=" ProductTypeValidate()">
                                <span id="sptype" style="color:red"> </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mannufacture:
                            </td>
                            <td>
                                <input type="text" name='Mannufacture' value="<?php echo $data['manufacturer'] ?>" id='Mannufacture' onblur="MannufactureValidate()">
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
                                <input type="text" name='Stock' value="<?php echo $data['stock'] ?> " id='Stock' onblur="QuantityValidate()">
                                <span id="sStock" style="color:red"> </span>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                MRP::
                            </td>
                            <td>
                                <input type="text" name='MRP' value="<?php echo $data['mrp'] ?> " id='MRP' onblur="mrpValidate()">
                                <span id="sMRP" style="color:red"> </span>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type='submit' name='submit ' value='submit' onclick="productNameValidation();QuantityValidate();BuypriceValidate();SellpriceValidate();">
                                <input type='Reset' value='Reset'>
                            </td>
                        </tr>
                    </table>
                </form>
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