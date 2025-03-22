    </div>
</div>
<footer id="footer" class="global-footer">
    <div class="wrapper">
        <div class="global-footer__menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
        <div class="global-footer__some">
            <ul class="margin-bottom">
                <li>
                    <a href="https://www.facebook.com/humankind.no" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"/></svg>
                        <span>Facebook</span>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/humankind.no" target="_blank" rel="noopener noreferrer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm1 16.852c0 1.738-1.41 3.148-3.148 3.148h-9.662c-1.739 0-3.19-1.41-3.19-3.148v-6.852h4.498c-.362.609-.581 1.313-.581 2.073 0 2.249 1.824 4.073 4.073 4.073 2.249 0 4.073-1.824 4.073-4.073 0-.76-.219-1.464-.58-2.073h4.517v6.852zm-11.148-4.779c0-.939.416-1.783 1.072-2.358.23-.202.49-.371.771-.499.395-.18.833-.28 1.294-.28.461 0 .899.101 1.293.28.283.128.543.297.773.499.654.575 1.07 1.419 1.07 2.358 0 1.73-1.406 3.138-3.137 3.138-1.728-.001-3.136-1.408-3.136-3.138zm11.148-2.74h-5.003c-.774-.85-1.859-1.333-3.007-1.333-1.142 0-2.23.479-3.008 1.333h-4.982v-2.185c0-1.052.532-1.978 1.333-2.549v2.735h.667v-3.103c.212-.084.436-.142.667-.18v3.282h.667v-3.333h.666v3.333h.667v-3.333h8.185c1.738 0 3.148 1.41 3.148 3.148v2.185zm-10.319 2.74c0-1.281 1.038-2.319 2.319-2.319s2.318 1.038 2.318 2.319-1.037 2.319-2.318 2.319c-1.281 0-2.319-1.038-2.319-2.319zm8.985-6.25v1.687c0 .271-.221.49-.496.49h-1.674c-.273 0-.496-.219-.496-.49v-1.687c0-.271.223-.49.496-.49h1.674c.275 0 .496.219.496.49z"/></svg>
                        <span>Instagram</span>
                    </a>
                </li>
            </ul>
            <?php wp_nav_menu( array( 'theme_location' => 'footermenu' ) ); ?>
        </div>
        <div class="global-footer__contact">
            <dl>
                <div>
                    <dt>E-post</dt>
                    <dd><a href="mailto:post@humankind.no">post@humankind.no</a></dd>
                </div>
                <div>
                    <dt>Vipps</dt>
                    <dd>65 66 80</dd>
                </div>
                <div>
                    <dt>Gavekonto</dt>
                    <dd>1506 53 47811</dd>
                </div>
                <div>
                    <dt>Org.nummer</dt>
                    <dd>925950483</dd>
                </div>
            </dl>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>