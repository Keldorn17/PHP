<style>
    .holder {
        margin: auto;
    }
</style>
<div class="holder">
<h1 class="text-center">Statisztika</h1>
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>&nbsp;</th>
                <th>Ország</th>
                <th>Típus</th>
                <th>Darabszám</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    const render = (data) => {
        let num = 0
        document.querySelector('tbody').innerHTML = data.map(obj => {
        num++
        return`
        <tr>
        <td>${num}</td>
        <td>${obj.orszag}</td>
        <td>${obj.tipus}</td>
        <td>${obj.count}</td>
        </tr>
        
        `}).join('')
    }
    getData('../server/statisztika.php', render)
</script>