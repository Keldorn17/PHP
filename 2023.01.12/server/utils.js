const insertUser = async (url, configObj, renderFc) => {
    const response = await fetch(url, configObj)
    const data = await response.json()
    renderFc(data)
}
const verifyUser = async (url, renderFc) => {
    const response = await fetch(url)
    const data = await response.json()
    renderFc(data)
}