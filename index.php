<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount on Input Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="box">
            <div>
                <h2>Product price and Discount calculator</h2>
                <hr> 
                <form action="" name="form_Name">
                    <table>
                        <tr>
                            <th>Unite Price</th>
                            <th>QTY</th>
                            <th>Total</th>
                            <th>Discount %</th>
                            <th>Discount Ammount</th>
                            <th>Grand Total</th>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="unite_price" value="" placeholder="0"  onKeyUp="calCu()">
                            </td>
                            <td>
                                <input type="text" name="qty" value="" placeholder="0" onKeyUp="calCu()">
                            </td>
                            <td>
                                <input type="text" name="total_price" value="" placeholder="0" readonly="readonly" id="tp" >
                            </td>
                            <td>
                                <input type="text" name="discount_percent" value="" placeholder="0"  id="discount_percent" onKeyUp="calCu()">
                            </td>
                            <td>
                                <input type="text" name="discount_price" value="" placeholder="0" readonly="readonly" id="dm" >
                            </td>
                            <td>
                                <input type="text" name="grand_total" value="" placeholder="0" readonly="readonly" id="gt" >
                            </td>
                        </tr>
                    </table>
                </form>
                <br><br>
                <hr>
            </div>
        </div>
    </section>
    

    <!-- js -->
    <script src="script.js"></script>
</body>
</html>