<h1 class="col-12 d-flex justify-content-center">Hajótípusok</h1>
<div class="col-md-4">
    <select name="" id="" class="custom-select" onchange="Opt(this)"></select>
</div>
<div class="col-md-8">
<table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Név</th>
                <th>Max.Személy</th>
                <th>Napidíj</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    const fillSelect = (data) => {
        document.querySelector('select').innerHTML = data.map(obj => `
            <option value="${obj.tipus}">${obj.tipus}</option>
        `).join('')
        Opt(document.querySelector('select'))
    }
    GetData('../server/fillSelect.php',fillSelect)

    const Opt = (obj) => {
        GetData(`../server/hajotipusok.php?tipus=${obj.value}`,renderTbl)
    }

    const renderTbl = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.nev}</td>
            <td>${obj.utas}</td>
            <td>${obj.dij}</td>
        </tr>
        `).join('')
    }

    
</script>