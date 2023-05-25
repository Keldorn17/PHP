<style>
    .holder{
        color: white;
        text-align: center;
    }
    tr{
        color: white;
    }
    table{
        border: 1px solid white;
    }
    .tablediv{
        overflow-y: scroll;
        height: 80vh;
    }
</style>
<div class="holder">
    <h1>Dobogósak</h1>
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
        console.log(data)
        document.querySelector("tbody").innerHTML = data.map(obj => `
            <tr>
                <td>${obj.nagydij}</td>
                <td>${obj.helyezes}</td>
                <td>${obj.vezeteknev} ${obj.keresztnev}</td>
            </tr>
        `).join("")
    }
    GetData('../server/dobogosak.php',render)
</script>