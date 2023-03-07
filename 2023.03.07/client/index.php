<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <script src="utils.js"></script>
</head>
<body>
    <form>
        <div>
            <label for="myimg">Fotó feltöltése: </label>
            <input type="file" name="myimg" id="myimg" onchange="uploadImg(this)">
        </div>
    </form>

    <div class="uploadedImg"></div>

    <script>
        const uploadImg = (obj) => {
            let myFile = obj.files[0]
            if (!['image/png', 'image/jpeg'].includes(myFile.type)) { // ['image/png', 'image/jpeg'].includes(myFile) 
                document.querySelector('.uploadedImg').innerHTML = "Csak kép feltöltése engedélyezett!"
                obj.files[0].value = ''
                return
            }
            // 2MB az engedélyezett
            if (myFile.size > 2*1024*1024) {
                document.querySelector('.uploadedImg').innerHTML = "Maximum megengedett file méret az 2MB"
                obj.files[0].value = ''
                return
            }
            const formData = new FormData()
            formData.append('myImage', myFile)
            const config = {
                method: 'POST',
                body: formData
            }
            sendFile('../server/upload.php', config, renderImg)
        }
        const renderImg = (data) => {
            console.log(data)
            document.querySelector('.uploadedImg').innerHTML = `
                <div>Sikeres feltöltés</div>  
                <img src="${data.img_src}" alt="fotó" style="width:100px;">
            `
        }
    </script>
</body>
</html>