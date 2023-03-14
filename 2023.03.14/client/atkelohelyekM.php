<style>
    .holder {
        margin: auto;
    }
</style>
<div class="holder">
    <h1 class="text-center">Megyénkénti határátkelőhelyek</h1>
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>&nbsp;</th>
                <th>Megye</th>
                <th>Típus</th>
                <th>Ország</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    const renderTbl = (data) => {
        let num = 0
        document.querySelector('tbody').innerHTML = data.map(obj => {
            num++
            return`
            <tr>
                <td>${num}</td>
                <td>${obj.megye}</td>
                <td>${obj.tipus}</td>
                <td>${obj.orszag}</td>
            </tr>
        `}).join('')
    }
    getData(`../server/atkelohelyekM.php`, renderTbl)

</script>