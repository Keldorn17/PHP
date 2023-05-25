<style>
    tr{
        color: white;
    }
    td{
        border: 1px solid white;
        text-align: center;
    }
    table{
        border: 1px solid white;
    }
    .tablediv{
        overflow-y: scroll;
        height: 80vh;
    }
    img{
        max-height: 100px;
    }
</style>

<div class="row">
    <div class="col-md-6">
        <select name="" id="" class="custom-select" onchange="changeSelect(this)">
        </select>
    </div>
    <div class="col-md-6">
        <div class="tablediv">
        <table class="table table-striped">
            <thead class="thead thead-dark">
                <tr class="position-sticky sticky-top">
                    <th>Helyezés</th>
                    <th>Fotó</th>
                    <th>Név</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        </div>
    </div>
</div>
<script>
    const render = (data) => {
        document.querySelector("tbody").innerHTML = data.map(obj => `
            <tr>
                <td>${obj.helyezes}</td>
                <td><img src="./images/${obj.foto}" alt="" class="img-fluid"></td>
                <td>${obj.vezeteknev} ${obj.keresztnev}</td>
            </tr>
        `).join("")
    }
    const changeSelect = (obj) => {
        GetData(`../server/nagydijak.php?nagydij=${obj.value}`, render)
    }

    const renderSelect = (data) => {
        document.querySelector("select").innerHTML = data.map(obj => `
            <option value="${obj.nagydij}">${obj.nagydij}</option>
        `).join("")
        changeSelect(document.querySelector("select"))
    }
    GetData('../server/FillSelect.php', renderSelect)
</script>