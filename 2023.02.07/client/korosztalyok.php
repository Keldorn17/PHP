<div class="holder">
    <h1 class="d-flex justify-content-center text-white">Korosztályok</h1>
    <div class="bg-white">
        <table class="table table-striped text-center">
            <thead class="thead thead-dark">
                <tr>
                    <th>Életkor</th>
                    <th>Vizsgázók</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<script>
    const render = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.eletkor}</td>
            <td>${obj.vizsgazok}</td>
        </tr>
        `).join('')
    }
    getData('../server/korosztalyok.php', render)
</script>