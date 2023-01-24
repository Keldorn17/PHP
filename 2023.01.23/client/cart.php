<style>
    .holder{
        max-width: 800px;
    }
</style>
<div class="holder">
    <h1>Shopping</h1>
    <table class="table table-striped table-responsive bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Qty</th>
                <th>€</th>
                <th>Total</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody></tbody>
        <tfoot>
            <tr>
                <td colspan = "3">Sum</td>
                <td id = "total">...</td>
            </tr>
        </tfoot>
    </table>
    <a href="./index.php?prog=products.php">Continue Shopping...</a>
    <a href="./index.php?prog=checkout.php" class="btn btn-outline-primary">Checkout</a>

</div>

<script>
    const render = (data) => {
        console.log(data)
        let tbl = '';
        let total = 0;
        for(let obj of data){
            total += obj.quantity * obj.price
            tbl += `
            <tr>
                <td>${obj.name}</td>
                <td><input type="number" value="${obj.quantity}"/></td>
                <td>${obj.price} €</td>
                <td>${obj.quantity * obj.price} €</td>
                <td><i class="fa-solid fa-trash btn text-danger" onclick="deleteItem(this)" id=${obj.id}></i></td>
            </tr>
            `
        }
        document.querySelector('tbody').innerHTML = tbl
        document.querySelector('#total').innerHTML = total + " €"
    }
    getData('../server/cartContent.php',render)

    const deleteItem = (obj) => {
        console.log(obj.id)
        getData(`../server/deleteItem.php?id=${obj.id}`,render)
    }

</script>