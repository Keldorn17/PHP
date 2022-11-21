<style>
    thead{
        position: sticky;
        top: 0;
    }
    .holder{
        margin-top: 10px;
        height: 70vh;
        overflow-y: auto;
    }
</style>
<h3>Kiadók szerinti megjelenítés</h3>
<select class="custom-select" onchange="show(this)">
    <option value="0">Válassz kiadót...</option>
</select>
<div class="holder">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Cím</th>
                <th>Kiadási év</th>
                <th>Kockák száma</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script src="getData.js"></script>
<script>
    const renderOpt = (data) => {
        document.querySelector('select').innerHTML += data.map(obj => `
        <option value="${obj.id}">${obj.nev}</option>
        `).join('')
    }
    getData('../server/kiado.php',renderOpt)

    const show = (obj) => {
        const id = obj.value
        if (id != 0)
            getData(`../server/filmek.php?id=${id}`,renderTbl)
    }
    const renderTbl = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.cim}</td>
            <td>${obj.kiadasiev}</td>
            <td>${obj.kocka}</td>
        </tr>
        `).join('')
    }

</script>