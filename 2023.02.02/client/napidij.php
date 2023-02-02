<style>
    .holder {
        margin: auto;
    }
</style>
<div class="holder">
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Név</th>
                <th>Típus</th>
                <th>Max.személy</th>
                <th>Ár/személy</th>
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
            <td>${obj.tipus}</td>
            <td>${obj.utas}</td>
            <td>${obj.ar}</td>
        </tr>
        `).join('')
    } 

    GetData('../server/napidij.php', render)
</script>