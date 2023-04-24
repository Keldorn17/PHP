<style>
    table{
        border: 1px solid white;
    }
    .tablediv{
        overflow: scroll;
        height: 80vh;
    }
    td{
        color: white;
        border: 1px solid white;
    }
    img{
        max-height: 150px;
    }
</style>
<div class="row p-2">
    <div class="col-md-6">
        <select class="custom-select" onchange="selectChange(this)"></select>
    </div>
    <div class="col-md-6 tablediv">
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

<script>
    const renderSelect = (data) => {
        document.querySelector("select").innerHTML = data.map(obj => `
            <option value="${obj.nagydij}">${obj.nagydij}</option>
        `).join("")
        selectChange(document.querySelector("select"))
    }
    GetData("../server/FillSelect.php", renderSelect)

    const renderTbl = (data) => {
        document.querySelector("tbody").innerHTML = data.map(obj => `
            <tr>
                <td>${obj.helyezes}</td>    
                <td class="text-center"><img src="./images/${obj.foto}" alt="" class="img-fluid"></td>
                <td>${obj.vezeteknev} ${obj.keresztnev}</td>
            </tr>
        `).join("");
    }

    const selectChange = (obj) => {
        GetData(`../server/nagydijak.php?nagydij=${obj.value}`, renderTbl)
    }
    
</script>