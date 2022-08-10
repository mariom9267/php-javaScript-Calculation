function calCu(){
    var unite_price = document.form_Name.unite_price.value;
    var qty = document.form_Name.qty.value;
    var total_price = document.form_Name.total_price.value;
    var discount_percent = document.form_Name.discount_percent.value;
    var grand_total = document.form_Name.grand_total.value;
    var discount_price = document.form_Name.discount_price.value;

    //calculation.........
    total_price = unite_price * qty;
    discount_price = (total_price*discount_percent)/100;
    grand_total = total_price - discount_price;

    //connected on field
    document.getElementById('tp').value=total_price;
    document.getElementById('dm').value=discount_price;
    document.getElementById('gt').value=grand_total;

}