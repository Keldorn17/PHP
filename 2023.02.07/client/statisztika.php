<div class="holder">
    <h1 class="d-flex justify-content-center text-white">Statisztikák</h1>
    <div class="bg-white">
        <table class="table table-striped text-center">
            <thead class="thead thead-dark">
                <tr>
                    <th>Nr</th>
                    <th>Nyelv</th>
                    <th>Szint</th>
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
            <td>${obj.nr}</td>
            <td>${obj.nyelv}</td>
            <td>${obj.szint}</td>
        </tr>
        `).join('')
    }
    getData('../server/statisztika.php', render)
</script>