<?php if(!defined('__TYPECHO_ADMIN__')) exit; ?>
<div class="typecho-foot" role="contentinfo">
    <div class="copyright">
        <i class="i-logo-s">Typecho</i>
        <p><?php _e('由 <a href="https://typecho.org" rel="noreferrer nofollow">%s</a> 强力驱动, 版本 %s (%s)', $options->software, $prefixVersion, $suffixVersion); ?></p>
    </div>
    <nav class="resource">
        <a href="https://docs.typecho.org" rel="noreferrer nofollow"><?php _e('帮助文档'); ?></a> &bull;
        <a href="https://forum.typecho.org" rel="noreferrer nofollow"><?php _e('支持论坛'); ?></a> &bull;
        <a href="https://github.com/typecho/typecho/issues" rel="noreferrer nofollow"><?php _e('报告错误'); ?></a> &bull;
        <a href="https://extends.typecho.org" rel="noreferrer nofollow"><?php _e('资源下载'); ?></a>
    </nav>
</div>
