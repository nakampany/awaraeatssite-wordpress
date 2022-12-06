<!-- フッター -->
<footer class="footer">
        <div class="footer-logo py-3">
            <h1><a href="#"><img class="track-logo3" src="<?php bloginfo('template_url') ;?>/img/trackawaraeats-logo.png" alt=""></a></h1>
        </div>
        <div class="footer-text">
            <p>AWARAEATS運営</p>
        </div>
        <div class="footer-list">
            <ul class="horizontal-list">
                <li class="horizontal-item"><a href="#">TOP</a></li>
                <li class="horizontal-item"><a href="https://awaraeats.com/%e4%ba%8b%e6%a5%ad%e5%86%85%e5%ae%b9/">事業内容</a></li>
                <li class="horizontal-item"><a href="https://awaraeats.com/%e3%83%97%e3%83%a9%e3%82%a4%e3%83%90%e3%82%b7%e3%83%bc%e3%83%9d%e3%83%aa%e3%82%b7%e3%83%bc/">プライバシーポリシー</a></li>
				<li class="horizontal-item"><a href="https://awaraeats.com/%e3%81%8a%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b/">お問い合わせ</a></li>
            </ul>
        </div>
        <div class="footer-copyright">
            <p class="copyright">© 2022 AWARA EATS CO.,LTD.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!--自作のJS-->
    <script src="<?php bloginfo('template_url') ;?>/js/5-1-9.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function slideSwitch() {
           var $active = $('#slideshow img.active');
        
           if ( $active.length == 0 ) $active = $('#slideshow img:last');
        
           var $next =  $active.next().length ? $active.next()
              : $('#slideshow img:first');
        
           $active.addClass('last-active');
        
           $next.css({opacity: 0.0})
              .addClass('active')
              .animate({opacity: 1.0}, 1000, function() {
                   $active.removeClass('active last-active');              });
        }
        
        $(function() {
           setInterval( "slideSwitch()", 5000 );
        });
    </script>
</body>
</html>