<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF File upload</title>
    <script src="utils.js"></script>
</head>
<body>
    <form>
        <div>
            <label for="myPDF"></label>
            <input type="file" name="myPFD" id="myPDF" onchange="uploadPDF(this)">
        </div>
    </form>
    <iframe src="" frameborder="0"></iframe>
    <div class="msg"></div>

    <script>
        const uploadPDF = (obj) => {
            console.log(obj.files)
            let myFile = obj.files[0]
            // kiterjesztés
            if (myFile.type != 'application/pdf') {
                document.querySelector('.msg').innerHTML = 'Csak pdf kiterjesztés a megengedett!'
                obj.files[0] = ''
                return
            }
            // 2MB a megengedett
            if (myFile.size > 1024 * 1024 * 2) {
                document.querySelector('.msg').innerHTML = 'Max 2MB a megengedett méret!'
                obj.files[0] = ''
                return
            }
            const formData = new FormData()
            formData.append('myPDF', myFile)
            const config = {
                method: 'POST',
                body: formData
            }
            sendFile('../server/upload.php', config, renderPDF)

        }
        const renderPDF = (data) =>{
            console.log('done')
            document.querySelector('iframe').src = data.pdf_src
        }
    </script>
</body>
</html>