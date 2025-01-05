<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hiddenElements = document.querySelectorAll('.hidden');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        hiddenElements.forEach(el => observer.observe(el));
    });
</script>