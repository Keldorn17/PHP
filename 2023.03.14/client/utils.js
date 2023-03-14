const getData = async (url, render) => {
    const response = await fetch(url)
    const data = await response.json()
    render(data)
}
const sendData = async (url, config, render) => {
    const response = await fetch(url, config)
    const data = await response.json()
    render(data)
}