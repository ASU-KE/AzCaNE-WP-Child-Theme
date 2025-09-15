/* Child theme JavaScript */
document.addEventListener('DOMContentLoaded', function() {
    waitForElement('.navbar .title').then((element) => {
        element.prepend('<h1 id="site-title">AzCaNE</h1>')
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