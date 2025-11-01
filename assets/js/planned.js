document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const layout = document.getElementById('user-app-layout');

    if (window.innerWidth > 768) {
        layout.classList.remove('toggled');
    } else {
        layout.classList.add('toggled');
    }

    menuToggle.addEventListener('click', function () {
        layout.classList.toggle('toggled');
    });

    document.querySelectorAll('.sidebar-item').forEach(item => {
        item.addEventListener('click', () => {
            if (window.innerWidth <= 768) {
                layout.classList.add('toggled');
            }
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            layout.classList.remove('toggled');
        }
    });
});