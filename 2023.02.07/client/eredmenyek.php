<div class="row mt-2">
<h1 class="d-flex justify-content-center text-white w-100">Eredmények</h1>
    <div class="col-md-4">
        <select name="" id="" class="custom-select" onchange="Opt(this)"></select>
    </div>
    <div class="col-md-8">
    <div class="bg-white">
        <table class="table table-striped text-center">
            <thead class="thead thead-dark">
                <tr>
                    <th>Eredmeny</th>
                    <th>Létszám</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    </div>
</div>


<script>
    const fillSelect = (data) => {
        document.querySelector('select').innerHTML = data.map(obj => `
        <option value="${obj.nyelv}">${obj.nyelv}</option>
        `).join('')
        Opt(document.querySelector('select'))
    }
    getData('../server/fillSelect.php',fillSelect)
    const Opt = (obj) => {
        getData(`../server/eredmenyek.php?nyelv=${obj.value}`, render)
    }
    const render = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.eredmeny}</td>
            <td>${obj.letszam}</td>
        </tr>
        `).join('')
    }
</script>