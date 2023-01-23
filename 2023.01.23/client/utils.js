const getData = async (url, FnName) => {
    const response = await fetch(url)
    const data = await response.json()
    FnName(data)
}

const postData = async (url, config, FnName) => {
    const response = await fetch(url, config)
    const data = await response.json()
    FnName(data)
}