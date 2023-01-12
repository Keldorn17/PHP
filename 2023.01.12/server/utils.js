const insertUser = async (url, configObj, renderFc) => {
    const response = await fetch(url, configObj)
    const data = await response.json()
    renderFc(data)
}