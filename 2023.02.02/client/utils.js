const GetData = async (url, render) => {
    const response = await fetch(url)
    const data = await response.json()
    render(data)
}

const PostData = async (url, configObj, render) => {
    const response = await fetch(url, configObj)
    const data = await response.json()
    render(data)
}