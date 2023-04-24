<style>
    .holder{
        color: white;
    }
    .tablediv{
        overflow: scroll;
        height: 80vh;
    }
    td{
        color: white;
        border: 1px solid white;
    }
    table{
        padding: 1px;
        border: 1px solid white;
    }
    h2{
        text-align: center;
    }
</style>
<div class="holder">
    <h2>Dobogósak</h2>
    <div class="tablediv">
    <table class="table table-striped">
        <thead class="thead thead-dark">
            <tr class="position-sticky sticky-top">
                <th>Nagydíj</th>
                <th>Helyezés</th>
                <th>Pilóta</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    </div>
</div>

<script>
    const render = (data) => {
        document.querySelector("tbody").innerHTML = data.map(obj => `
            <tr>
                <td>${obj.nagydij}</td>
                <td>${obj.helyezes}</td>
                <td>${obj.vezeteknev} ${obj.keresztnev}</td>
            </tr>
        `).join("")
    }

    GetData("../server/dobogosak.php", render)
</script>