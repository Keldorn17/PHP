<style>
    .holder {
        margin: auto;
    }
</style>
<div class="holder">
    <h1>Havi bevétel hajónként összegezve</h1>
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Név</th>
                <th>Össz nap</th>
                <th>Bevétel</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
    const render = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.nev}</td>
            <td>${obj.nap}</td>
            <td>${obj.ar}</td>
        </tr>
        `).join('')
    } 

    GetData('../server/bevetel.php', render)
</script>