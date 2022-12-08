const getData = async (url,fnName) =>{
    const response = await fetch(url)
    const data = await response.json()
    fnName(data)
}
const postData = async (url,configObj,fnName) =>{
    const response = await fetch(url,configObj)
    const data = await response.json()
    fnName(data)
}
