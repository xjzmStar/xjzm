<!-- Footer（与主页逐字相同） -->
<footer>
    <div>
        <p>&copy; <?php echo date('Y'); ?> 星际织梦</p>
            <div class="footer-icp">
                <img src="/blog/usr/themes/starweaver/images/gongan.jpg" style="height:14px;vertical-align:middle;margin-right:4px;">
                <a href="https://beian.mps.gov.cn/#/query/webSearch?code=32030002001354" target="_blank" rel="noopener">苏公网安备 32030002001354号</a>
                <a href="https://beian.miit.gov.cn/" target="_blank" rel="noopener">陇ICP备2026008839号</a>
            </div>
    </div>
</footer>
<script>
(function() {
    const animElements = document.querySelectorAll('.fade-in, .fade-in-left, .fade-in-right, .fade-in-scale');
    const animObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
    }, { threshold: 0.15 });
    animElements.forEach(el => animObserver.observe(el));
})();
</script>
<?php $this->footer(); ?>
</body>
</html>
