<style>
    .holder {
        margin: auto;
    }
</style>
<div class="holder">
    <h1 class="text-center">Határátkelőhelyek országonként</h1>
    <select name="" id="" class="custom-select mb-2" onchange="Opt(this)"></select>
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Magyar Település</th>
                <th>Szomszéd Település</th>
                <th>Átkelőhely Típusa</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<script>
    const renderTbl = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
            <tr>
                <td>${obj.nev}</td>
                <td>${obj.szomszed_telepules}</td>
                <td>${obj.tipus}</td>
            </tr>
        `).join('')
    }

    const Opt = (obj) => {
        getData(`../server/atkelohelyekO.php?orszag=${obj.value}`, renderTbl)
    }

    const renderOpt = (data) => {
        document.querySelector('select').innerHTML = data.map(obj => `
        <option value="${obj.orszag}">${obj.orszag}</option>
        `).join('')
        Opt(document.querySelector('select'))
    }
    getData('../server/OrszagSelectFill.php', renderOpt)

</script>