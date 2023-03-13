const sendFile = async (url, configObj, render) => {
    const response = await fetch(url, configObj)
    const data = await response.json()
    render(data)
}