<h1 class="col-12 d-flex justify-content-center">Hajótípusok</h1>
<div class="col-md-4">
    <select name="" id="" class="custom-select" onchange="Opt(this)">
        <option value="0">Válassz...</option>
    </select>
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
        document.querySelector('select').innerHTML += data.map(obj => `
            <option value="${obj.tipus}">${obj.tipus}</option>
        `).join('')
    }
    GetData('../server/fillSelect.php',fillSelect)

    const Opt = (obj) => {
        const tipus = obj.value
        if (id != 0)
            GetData(`../server/hajotipusok.php?tipus=${obj.value}`,renderTbl)
        else
            document.querySelector('tbody').innerHTML = ""
        
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