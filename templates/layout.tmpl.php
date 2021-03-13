<?php _X ('common-pre') ?>

<div class="title-area">
  <div class="top-bar">
    <svg xmlns="http://www.w3.org/2000/svg" width="15.93" height="13.6"><path stroke="none" d="M1.155,6.049 C5.430,4.188 8.281,2.962 9.708,2.369 C13.781,0.677 14.627,0.384 15.179,0.374 C15.300,0.372 15.571,0.402 15.747,0.544 C15.895,0.664 15.936,0.827 15.956,0.941 C15.975,1.055 15.999,1.314 15.980,1.517 C15.759,3.834 14.804,9.454 14.319,12.048 C14.113,13.146 13.708,13.514 13.316,13.550 C12.465,13.628 11.818,12.988 10.993,12.448 C9.702,11.603 8.973,11.077 7.720,10.252 C6.272,9.299 7.211,8.775 8.036,7.919 C8.252,7.695 12.004,4.286 12.077,3.977 C12.086,3.938 12.095,3.794 12.009,3.718 C11.923,3.642 11.797,3.668 11.705,3.689 C11.576,3.718 9.514,5.079 5.519,7.772 C4.934,8.174 4.404,8.369 3.929,8.359 C3.405,8.348 2.398,8.063 1.649,7.820 C0.731,7.522 0.001,7.364 0.064,6.858 C0.097,6.594 0.461,6.325 1.155,6.049z"></path></svg><div class="top-bar-broadcast">На новые заметки можно <b><a href="https://t.me/podivilov_channel" class="top-bar-link">подписаться</a></b> в Телеграме. Старые заметки переехали в <b><a href="https://archive.podivilov.ru/all/" class="top-bar-link">архив</a></b>.<a href="javascript:void(0);" name="dismiss" class="top-bar-link dismiss"><span style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="15.93" height="13.6"><path class="st1" stroke="none" d="M13.2 2.1L8 7.3 2.8 2.1l-.7.7L7.3 8l-5.2 5.2.7.7L8 8.7l5.2 5.2.7-.7L8.7 8l5.2-5.2z"></path></svg></span></a></div><div class="top-bar-broadcast mobile"><b><a href="https://t.me/podivilov_channel" class="top-bar-link">Подписаться</a></b> на мой блог в Телеграме.<a href="javascript:void(0);" name="dismiss" class="top-bar-link dismiss"><span style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="15.93" height="13.6"><path class="st1" stroke="none" d="M13.2 2.1L8 7.3 2.8 2.1l-.7.7L7.3 8l-5.2 5.2.7.7L8 8.7l5.2 5.2.7-.7L8.7 8l5.2-5.2z"></path></svg></span></a></div>
  </div>
</div>

<script type="text/javascript">
if (!document.cookie.match(RegExp('(?:^|;\\s*)' + "__dismiss" + '=([^;]*)'))) {
    document.querySelectorAll(".title-area").forEach(item=>item.style.display = "block");
}
</script>

<div class="common">



<div class="flag">
  <?php _X ('header-pre') ?>

  <div class="header-content">

    <div class="header-description">

      <div class="title">

        <div class="title-inner">

          <div class="logo-marginal">
            <?php _T ('user-picture') ?>
          </div>

          <div class="logo">
            <?php _T ('user-picture') ?>
          </div>

          <h1>
            <?= _A ('<a href="' . $content['blog']['href'] . '"><span id="e2-blog-title">' . $content['blog']['title'] . '</span></a>') ?>
          </h1>

        </div>

        <?php if ($content['class'] == 'frontpage') { ?>
          <div id="e2-blog-description"><?= $content['blog']['subtitle'] ?></div>
        <?php } ?>

      </div>
    </div>

    <div class="spotlight">
      <?php #_T_DEFER ('stat') ?>

      <span class="admin-links-floating">
        <?php _T ('author-menu') ?>
      </span>

      <?php if ($content['class'] != 'found') { ?>
        <?php _T_FOR ('form-search') ?>
      <?php } ?> 
    </div>

  </div>

  <?php _X ('header-post') ?>
</div>



<div class="content">

<?php _T ('heading') ?>
<?php _T ('theme-preview') ?>
<?php _T ('message') ?>
<?php _T ('welcome') ?>
<?php _T ('unavailable') ?>
<?php _T ('notes') ?>
<?php _T ('notes-list') ?>
<?php _T ('tags') ?>
<?php _T ('nothing') ?>
<?php _T ('sessions') ?>
<?php _T ('sources') ?>
<?php _T ('pages') ?>
<?php _T ('comments') ?>
<?php _T ('popular') ?>
<?php _T ('tags-menu') ?>
<?php _T ('unsubscribe') ?>
<?php _T ('form') ?>

</div>




<div class="footer">
<?php _X ('footer-pre') ?>
© <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span>, <?=$content['blog']['years-range']?>

<div class="engine">
<?= $content['engine']['about'] # please do not remove ?>
<?php _T_DEFER ('stat') ?>
</div>
<div style="padding: 10px;"></div>

<script type="text/javascript">
if (document.cookie.indexOf('__dismiss=')) {
    document.querySelectorAll('.dismiss').forEach(item => {
        item.addEventListener('click', event => {
        document.cookie = "__dismiss=true;expires=Fri, 31 Dec 9999 23:59:59 GMT;domain=.podivilov.ru;path=/";
        var elements = document.getElementsByClassName("top-bar");
            while(elements.length > 0) {
                elements[0].parentNode.removeChild(elements[0]);
            }
        })
    })
}
if (window.matchMedia &&
    window.matchMedia('(prefers-color-scheme: dark)').matches) {
    var likely = document.getElementById("likely");
    likely.classList.add("likely-light");
}
</script>

<?php _X ('footer-post') ?>
</div>




</div>

<?php _T ('niceerror'); ?>
