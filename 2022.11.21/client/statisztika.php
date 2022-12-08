<style>
    thead{
        position: sticky;
        top: 0;
    }
    h3{
        width: 100%;
        text-align: center;
    }
    .holder{
        margin-top: 10px;
        height: 70vh;
        overflow-y: auto;
    }
</style>
<h3>Kiadási évkénti statisztika</h3>
<div class="holder">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>&nbsp;</th>
                <th>Kiadási év</th>
                <th>Darabszám</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script src="fetchData.js"></script>
<script>
    const renderTbl = (data) => {
        let numb = 0
        document.querySelector('tbody').innerHTML = data.map(obj => {
        numb++
        return `
        <tr>
            <td>${numb}</td>
            <td>${obj.kiadasiev}</td>
            <td>${obj.darab}</td>
        </tr>
        `}).join('')
    }
    getData('../server/statisztika.php',renderTbl)
</script>