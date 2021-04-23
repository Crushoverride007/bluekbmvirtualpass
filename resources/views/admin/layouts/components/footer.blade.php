<footer class="main-footer" style="background-color:#0b032d;">
    <div class="footer-left">
    	{{ setting('site_footer') }}
    </div>
    <div class="footer-right">v{{ \App\Libraries\MyString::version(config('site.version')) }}</div>
</footer>
