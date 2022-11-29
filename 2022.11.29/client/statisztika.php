<h3 class="text-center">Statisztika adatok településenként</h3>
<style>
    .holder{
        max-width: 90%;
        margin: auto;
    }
</style>
<div class="holder">
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Település</th>
                <th>Munkás</th>
                <th>Össz anyagár</th>
                <th>Össz munkaóra</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
     const getData = async (url, fnName) => {
        const response = await fetch(url)
        const data = await response.json()
        fnName(data)
    }
    const render = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.telepules}</td>
            <td>${obj.nev}</td>
            <td>${obj.anyagar}</td>
            <td>${obj.munkaora}</td>
        </tr>
        `).join('')
    }
    getData('../server/statisztikaTbl.php',render)
</script>