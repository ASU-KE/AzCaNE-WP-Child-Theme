/* Child theme JavaScript */
// Create a new element to prepend
const newElement = document.createElement('h1');
newElement.textContent = 'AzCaNE';
document.addEventListener('DOMContentLoaded', function() {
    waitForElement('.navbar .title').then((element) => {
        element.prepend(newElement)
    })
})



function waitForElement(selector) {
    return new Promise((resolve) => {
        const observer = new MutationObserver((mutations, observer) => {
            const element = document.querySelector(selector)
            if (element) {
                observer.disconnect()
                resolve(element)
            }
        })

        observer.observe(document.body, {
            childList: true,
            subtree: true,
        })
    })
}