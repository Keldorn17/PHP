<h4 class="text-center">Fordulj hottánk bizalommal</h4>
<table class="table table-striped text-center w-50" style="margin: auto;">
    <thead class="thead thead-dark">
        <tr>
            <th>Név</th>
            <th>Régiség(év)</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<script>
    const getData = async (url, fnName) => {
        const response = await fetch(url)
        const data = await response.json()
        fnName(data)
    }
    const render = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.nev}</td>
            <td>${obj.regiseg}</td>
        </tr>
        `).join('')
    }
    getData('../server/rolunkTbl.php',render)
</script>