const sendFile = async (url, configObj, render) => {
    const response = await fetch(url, configObj)
    const data = await response.json()
    render(data)
}
const downloadFile = async (url, render) => {
    const response = await fetch(url)
    const data = await response.blob()
    render(data)
}