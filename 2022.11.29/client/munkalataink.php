<h3 class="text-center">Munkálataink településenként</h3>
<style>
    .holder{
        max-width: 50%;
        margin: auto;
    }
    select{
        margin-bottom: 10px;
    }
</style>
<div class="holder">
    <select class="custom-select" onchange="show(this)">
        <option value="0">Válassz települést...</option>
    </select>
    <table class="table table-striped text-center">
        <thead class="thead thead-dark">
            <tr>
                <th>Munkás</th>
                <th>Alkalom</th>
                <th>Össz munkaóra</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<script>
    const getData = async (url, fnName) => {
        const response = await fetch(url)
        const data = await response.json()
        fnName(data)
    }
    const renderOpt = (data) =>{
        document.querySelector('select').innerHTML += data.map(obj => `
        <option value="${obj.telepules}">${obj.telepules}</option>
        `).join('')
    }
    getData('../server/renderOpt.php',renderOpt)

    const renderTbl = (data) => {
        document.querySelector('tbody').innerHTML = data.map(obj => `
        <tr>
            <td>${obj.nev}</td>
            <td>${obj.alkalom}</td>
            <td>${obj.munkaora}</td>
        </tr>
        `).join('')
    }
    
    const show = (obj) => {
        const id = obj.value
        if (id != 0)
            getData(`../server/munkalatainkTbl.php/?telepules=${id}`,renderTbl)
        else
            document.querySelector('tbody').innerHTML = ""
    }
    
</script>