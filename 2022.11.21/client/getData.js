const getData = async (url,fnName) =>{
    const response = await fetch(url)
    const data = await response.json()
    fnName(data)
}