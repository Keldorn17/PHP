<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elmentett fájlok megjelenítése</title>
    <script src="utils.js"></script>
</head>
<body>
    <button onclick="download(Event)">show PDF file</button>

    <script>
        const download = (e) => {
            e.preventDefault()
            downloadFile('../docs/1678692948.pdf', render)
        }
        const render = (data) => {
            console.log(data)
            let a = document.createElement("a")
            a.href = window.URL.createObjectURL(data)
            a.download = "FILENAME"
            a.click()
        }
    </script>
</body>
</html>