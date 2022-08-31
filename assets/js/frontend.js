document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre').forEach((el) => {
        hljs.highlightElement(el);
    });
});
