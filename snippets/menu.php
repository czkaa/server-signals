<nav class="menu">
    
    <div class="menu__top">
        <a href="/" class="<?php if ($active === 'home'): ?>active<?php endif; ?>">
            <span>Home</span>
        </a>
    </div>

    <div class="menu__right">
        <a href="/about" class="<?php if ($active === 'about'): ?>active<?php endif; ?>">
            <span>About</span>
        </a>
    </div>

    <div class="menu__left">
        <a href="/glossary" class="<?php if ($active === 'glossary'): ?>active<?php endif; ?>">
            <span>Glossary</span>
        </a>
    </div>

    <div class="menu__bottom">
        <a href="/lead-me-to-your-heart" class="<?php if ($active === 'lead-me-to-your-heart'): ?>active<?php endif; ?>">
            <span>I. Lead Me to Your Heart</span>
        </a>

        <a href="/network-tapestry" class="<?php if ($active === 'network-tapestry'): ?>active<?php endif; ?>">
            <span>II. Network Tapestry</span>
        </a>

        <a href="/on-off" class="<?php if ($active === 'on-off'): ?>active<?php endif; ?>">
            <span>III. On / Off</span>
        </a>
    </div>
</nav>