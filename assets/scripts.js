const services = document.getElementById('services')
const result = document.getElementById('result')

services.addEventListener('input', fetchService)


const url = '/src/process.php'

async function fetchService() {
    removeAllChildNodes(result)

    const formData = new FormData()
    formData.append('service', services.value)

    const response = await fetch(url, {
        method: 'POST',
        body: formData
    })
    const service = await response.json()

    const ulContainer = document.createElement('ul')
    result.appendChild(ulContainer)
    for (const key in service) {
        const li = document.createElement('li')
        li.innerText = `${key} - ${service[key]}`
        ulContainer.appendChild(li)
    }
}

function removeAllChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild)
    }
}