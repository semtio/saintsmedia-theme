document.addEventListener('DOMContentLoaded', () => {
    const adminBar = document.getElementById('wpadminbar');
    const header = document.querySelector('.saintsmedia-theme-header');

    if (!adminBar || !header) {
        return;
     }

    const applyOffset = () => {
        const height = adminBar.getBoundingClientRect().height || 0;
        header.style.top = height ? `${height}px` : '';
    };

    applyOffset();
    window.addEventListener('resize', applyOffset);
});
